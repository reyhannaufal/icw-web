<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Event;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        return view('pages.messages.msg-index', [
            'events' => Event::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => [
                'required',
                'string',
                'max:31',
                'alpha'
            ],
            'last_name' => [
                'required',
                'string',
                'max:31',
                'alpha'
            ],
            'institution' => [
                'required',
                'string',
            ],
            'email' => 'required|email',
            'phone_number' =>
                'required',
            'message' => [
                'required',
                'string',
                'max:65535'
            ]
        ]);

        Messages::create([
            'first_name' => $attributes['first_name'],
            'last_name' => $attributes['last_name'],
            'institution' => $attributes['institution'],
            'email' => $attributes['email'],
            'phone_number' => $attributes['phone_number'],
            'message' => $attributes['message'],
        ]);

        return redirect()->route('contact')
            ->with('success', 'Message sended successfully!');
    }
}
