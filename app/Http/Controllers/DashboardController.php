<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\Announcement;
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
                ->latest()->paginate(6),
        ]);
    }

    public function update(Request $request)
    {
        $pivot_table = Event::where('id', $request->eventId)->first()->usersWithPivot();
        $pivot_table->updateExistingPivot($request->userId, [
                'payment_status' => $request->status,
                'updated_at' => Carbon::now()
            ]);
        $curr_pivot_row = $pivot_table->first()->participation;

        // If status == failed && payment recipt not default image --> delete payment receipt
        if ($curr_pivot_row->payment_status === 'failed') {
            $success = $this->deleteLocalFile($curr_pivot_row->payment_receipt_path);
            if ($success) {
                $pivot_table->updateExistingPivot($request->userId, [
                    'payment_receipt_path' => null,
                ]);
            }
        }

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
