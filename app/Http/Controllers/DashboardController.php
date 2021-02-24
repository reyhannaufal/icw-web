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
use Throwable;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->isAdmin()) {
            return view('dashboard.admin.panel');
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
                ->latest()->paginate(4),
        ]);
    }

    public function update(Request $request)
    {
        // initialize variable
        $curr_event = Event::where('id', $request->eventId)->first();
        $curr_user = User::where('id', $request->userId)->first();

        // Update payment status
        $pivot_table = $curr_event->usersWithPivot();
        $pivot_table->updateExistingPivot($curr_user->id, [
                'payment_status' => $request->status,
                'updated_at' => Carbon::now()
            ]);

        // If status == failed && payment recipt not default image --> delete payment receipt
        $curr_pivot_row = $pivot_table->first()->participation;
        if ($curr_pivot_row->payment_status === 'failed') {
            $delete_success = $this->deleteLocalFile($curr_pivot_row->payment_receipt_path);

            // change path to null if image is deleted successfully
            if ($delete_success) {
                $pivot_table->updateExistingPivot($request->userId, [
                    'payment_receipt_path' => null,
                ]);
            }
        }

        // send mail
        $curr_user->notify(new PaymentStatus($request->status, $curr_event->name, $curr_user->name));

        return view('dashboard.admin.verification', [
            'users' => $pivot_table->where('payment_status', 'pending')->latest()->paginate(6)
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
