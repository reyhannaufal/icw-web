<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show(Event $event)
    {
        return view('pages.event.info', [
            'events' => Event::all(),
            'event' => $event
        ]);
    }

    public function create(Event $event)
    {
        $view = null;
        $payment_status = auth()->user()->getPaymentStatus($event);

        // User hasn't register
        if (!$payment_status) {
            $view = view('dashboard.user.event-register-form', [
                'event' => $event,
                'bills' => $event->bills()->orderBy('bank_name', 'DESC')->get()
            ]);
        } // Payment is waiting for verification
        else if ($payment_status == 'pending') {
            $view = view('dashboard.user.register-status', [
                'status' => 'pending'
            ]);
        } // Payment failed
        else if ($payment_status == 'failed') {
            $view = view('dashboard.user.register-status', [
                'status' => 'failed'
            ]);
        } // Payment success
        else if ($payment_status == 'success') {
            $view = view('dashboard.user.register-status', [
                'status' => 'success'
            ]);
        } else {
            abort(403, 'Status pembayaran tidak terdifinisi');
        }

        return $view;
    }

    public function store(Event $event)
    {
        dd(1);
    }
}
