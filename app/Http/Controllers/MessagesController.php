<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Event;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Messages::all();

        return view('dashboard.admin.message.index', compact('messages'));
    }

    public function create() {
        return view('pages.contact');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => [
                'required',
                'string',
                'max:255',
            ],
            'last_name' => [
                'required',
                'string',
                'max:255',
            ],
            'institution' => [
                'required',
                'string',
                'max: 255'
            ],
            'email' => 'required | email',
            'phone_number' => [
                'required',
                'max: 63',
                'regex:/\+62\s\d{3}[-\.\s]??\d{3}[-\.\s]??\d{3,4}|\(0\d{2,3}\)\s?\d+|0\d{2,3}\s?\d{6,7}|\+62\s?361\s?\d+|\+62\d+|\+62\s?(?:\d{3,}-)*\d{3,5}/'
            ],
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
