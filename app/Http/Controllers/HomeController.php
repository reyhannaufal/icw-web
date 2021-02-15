<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.welcome', [
            'competition_events' => Event::where('type', 'competition')->get(),
            'non_competition_events' => Event::where('type', 'non-competition')->get()
        ]);
    }
}
