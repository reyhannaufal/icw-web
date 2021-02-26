<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
        $messages = Messages::all();

        return view('dashboard.admin.message.index', compact('messages'));
    }

    public function show(Messages $message)
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
        return view('dashboard.admin.message.show', compact('message'));
    }

    public function create() {
        return view('pages.contact');
    }

    public function update(Request $request, Messages $message)
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
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
        $this->authorize('interactAsMaster'); // If false, it'll display 403

        if ($message->status == 'Sudah diproses') {
            $message->delete();
            return redirect()->route('message.index');
        } else {
            return redirect()->route('message.index')
                ->with('error', 'Pesan belum dapat dihapus!');
        }
    }
}
