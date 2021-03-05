<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardEventsController extends Controller
{
    public function index() {
        return view('dashboard.user.event-anda', [
            'events' => auth()->user()->events()->where('payment_status', 'success')->get()
        ]);
    }

    public function show(Event $event)
    {
        // Onlu registered and verified users can access event page
        if  (empty(auth()
                ->user()->events()
                ->where('event_id', $event->id)
                ->where('payment_status', 'success')
                ->first())
            ) {
            abort(403);
        }
        return view('dashboard.user.show-event', compact('event'));
    }

    public function storePaper(User $user) {
        $pivot_table = $user->events();

        // Onlu registered and verified users can access event page
        if  (empty($pivot_table
            ->where('name', 'Paper Competition')
            ->where('payment_status', 'success')
            ->first())
        ) {
            abort(403);
        }

        $attributes = request()->validate([
            'paper' => [
                'required',
                'mimes:pdf',
                'max:1024'
            ],
        ]);

        $file_type = request('paper')->extension();
        $file_name = 'paper_' . Str::slug($user->name, '_') . '.' . $file_type;
        $attributes['paper'] = request('paper')->storeAs('papers', $file_name);

        $pivot_table->updateExistingPivot(1, [
            'paper_path' => $attributes['paper'],
            'paper_grade' => 0.00
        ]);

        return back()->with('success','Upload File Sukses!');
    }
}
