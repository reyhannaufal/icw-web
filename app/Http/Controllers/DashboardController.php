<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Announcement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.user.home.user-welcome', [
            'events' => Event::all(),
            'announcements' => Announcement::latest()
                ->paginate(config('pagination'))
        ]);
    }
}
