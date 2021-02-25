<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\Announcement;
use App\Notifications\PaymentStatus;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;
use Log;
use Notification;
use Throwable;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->isAdmin()) {
            $event = Event::where('id', auth()->user()->id)->first();

            return view('dashboard.admin.panel', [
                'event_name' => $event->name,
                'pending_count' => $event->countRowsOnStatus('pending'),
                'failed_count' => $event->countRowsOnStatus('failed'),
                'success_count' => $event->countRowsOnStatus('success')
            ]);
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
        $this->authorize('interact', $event); // If false, it'll display 403

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

        // Update payment status
        $pivot_table = $curr_event->usersWithPivot();
        $pivot_table->updateExistingPivot($request->userId, [
                'payment_status' => $request->status,
                'updated_at' => Carbon::now()
            ]);

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
}
