<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Messages::all();

        return view('dashboard.admin.message.index', compact('messages'));
    }

    public function show(Messages $message)
    {
        return view('dashboard.admin.message.show', compact('message'));
    }

    public function create() {
        return view('pages.contact');
    }

    public function update(Request $request, Messages $message)
    {
        $message->update($request->validate([
            'status' => [
                'required',
                'string',
                'max:63'
            ]
        ]));

        return redirect()->route('message.index');
    }

    public function store(StoreMessageRequest $request)
    {
        $attributes = $request->validated();

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

    public function destroy(Messages $message)
    {
        $message->delete();

        return redirect()->route('message.index');
    }
}
