<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Announcement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // go to admin panel
        if (auth()->user()->id == 1) {
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
}
