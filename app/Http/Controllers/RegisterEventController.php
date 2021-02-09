<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class RegisterEventController extends Controller
{
    public function show(Event $event)
    {
        return view('pages.event-register-form', [
            'event' => $event
        ]);
    }
}
