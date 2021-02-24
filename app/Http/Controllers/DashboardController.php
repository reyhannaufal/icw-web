<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\Announcement;
use Carbon\Carbon;
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
            'users' => $event->usersWithPivot()->latest()->paginate(6),
        ]);
    }

    public function update(Request $request)
    {
        Event::where('id', $request->eventId)
            ->first()->users()
            ->updateExistingPivot($request->userId, [
                'payment_status' => $request->action,
                'updated_at' => Carbon::now()
            ]);

        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
}
