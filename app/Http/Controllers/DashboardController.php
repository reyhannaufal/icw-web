<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\Event;
use App\Models\Announcement;
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

                return view('dashboard.admin.panel', [
                    'users' => $event->usersWithPivot()->orderBy('id', 'ASC')->get(),
                    'event_name' => $event->name,
                    'pending_count' => $event->countRowsOnStatus('pending'),
                    'failed_count' => $event->countRowsOnStatus('failed'),
                    'success_count' => $event->countRowsOnStatus('success')
                ]);
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
        $this->authorize('interactAsEventAdmin', $curr_event); // If false, it'll display 403

        // Update payment status
        $pivot_table = $curr_event->usersWithPivot();
        $pivot_table->updateExistingPivot($request->userId, [
                'payment_status' => $request->status,
                'updated_at' => Carbon::now()
            ]);

        // If payment receipt not default image --> delete payment receipt
        $curr_pivot_row = $pivot_table->first()->participation;
        $delete_success = $this->deleteLocalFile($curr_pivot_row->payment_receipt_path);

        // change path to null if image is deleted successfully
        if ($delete_success) {
            $pivot_table->updateExistingPivot($request->userId, [
                'payment_receipt_path' => null,
            ]);
        }

        // send mail
        Notification::route('mail', $request->usermail)
            ->notify(new PaymentStatus($request->status, $curr_event->name, $request->username));

        return view('dashboard.admin.verification', [
            'users' => $pivot_table->where('payment_status', 'pending')->oldest()->paginate(6)
        ]);
    }

    public function deleteLocalFile($path_to_file)
    {
        // Don't delete default image
        if ($path_to_file !== 'payment_receipts/default.png') {
            if (File::exists(public_path('storage/' . $path_to_file))) {
                File::delete(public_path('storage/' . $path_to_file));
                return true;
            } else {
                Log::info('File not found!');
            }
        }
        return false;
    }

    public function exportAll()
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
        return Excel::download(new UsersExport(0), 'Peserta Seluruh Event ICW' . '.xlsx');
    }

    public function export(Event $event)
    {
        $this->authorize('interactAsEventAdmin', $event); // If false, it'll display 403
        return Excel::download(new UsersExport($event->id), 'Peserta ' . $event->name . '.xlsx');
    }
}
