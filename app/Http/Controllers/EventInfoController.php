<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventInfoController extends Controller
{
    public function show(Event $event)
    {
        return view('pages.event.info', [
            'events' => Event::all(),
            'event' => $event
        ]);
    }
}
