<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\Event;
use App\Models\Announcement;
use App\Models\User;
use App\Notifications\PaymentStatus;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Log;
use Maatwebsite\Excel\Facades\Excel;
use Notification;
use Throwable;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->isAdmin()) {
            if (auth()->user()->id == Event::all()->count() + 1) {
                // Master admin
                $this->authorize('interactAsMaster'); // If false, it'll display 403

               $event_users = DB::table('event_user')
                   ->join('users', 'user_id', '=', 'users.id')
                   ->join('events', 'event_id', '=', 'events.id')
                   ->select(
                       'users.name AS name', 'events.name AS event_name',
                       'payment_status', 'email', 'institution', 'phone_number',
                       'event_user.created_at'
                   )->orderBy('event_name')->get();

                return view('dashboard.admin.panel', [
                    'users' => $event_users,
                    'event_name' => 'Semua Event',
                    'pending_count' => $event_users->where('payment_status', 'pending')->count(),
                    'failed_count' => $event_users->where('payment_status', 'failed')->count(),
                    'success_count' => $event_users->where('payment_status', 'success')->count(),
                ]);
            }
            else {
                // Admin normal
                $event = Event::where('id', auth()->user()->id)->first();
                $this->authorize('interactAsEventAdmin', $event); // If false, it'll display 403

                if ($event->isFree()) {
                    return view('dashboard.admin.panel', [
                        'users' => $event->usersWithPivot()->orderBy('id', 'ASC')->get(),
                        'event_name' => $event->name,
                        'isFree' => true,
                        'registered_count' => $event->countRowsOnStatus('success'),
                    ]);
                } else {
                    return view('dashboard.admin.panel', [
                        'users' => $event->usersWithPivot()->orderBy('id', 'ASC')->get(),
                        'event_name' => $event->name,
                        'pending_count' => $event->countRowsOnStatus('pending'),
                        'failed_count' => $event->countRowsOnStatus('failed'),
                        'success_count' => $event->countRowsOnStatus('success')
                    ]);
                }
            }
        }
        else { // go to user dashboard
            return view('dashboard.home.welcome', [
                'events' => Event::all(),
                'announcements' => Announcement::latest()
                    ->paginate(config('pagination'))
            ]);
        }
    }

    // Admin section
    public function edit(Event $event)
    {
        $this->authorize('interactAsEventAdmin', $event); // If false, it'll display 403

        return view('dashboard.admin.verification', [
            'users' => $event->usersWithPivot()
                ->where('payment_status', 'pending')
                ->oldest()->paginate(4),
        ]);
    }

    public function update(Request $request)
    {
        // initialize event variable
        $curr_event = Event::where('id', $request->eventId)->first();

        try {
            $this->authorize('interactAsEventAdmin', $curr_event); // If false, it'll display 403
        } catch (Throwable  $e) {
            return back()->with('error', 'Forbidden access!');
        }
        $curr_event->deleteFile('payment_receipts', $request->userId, $request->status);

        // send mail
        Notification::route('mail', $request->usermail)
            ->notify(new PaymentStatus($request->status, $curr_event->name, $request->username));

        return view('dashboard.admin.verification', [
            'users' => $curr_event->usersWithPivot()->where('payment_status', 'pending')->oldest()->paginate(6)
        ]);
    }

    public function exportAll()
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
        return Excel::download(new UsersExport(0, false), 'Peserta Seluruh Event ICW' . '.xlsx');
    }

    public function export(Event $event)
    {
        $this->authorize('interactAsEventAdmin', $event); // If false, it'll display 403
        return Excel::download(new UsersExport($event->id, $event->isFree()), 'Peserta ' . $event->name . '.xlsx');
    }
}
