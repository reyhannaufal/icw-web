<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.welcome', [
            'events' => Event::all(),
        ]);
    }
}
