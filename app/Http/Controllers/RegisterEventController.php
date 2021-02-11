<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class RegisterEventController extends Controller
{
    public function show(Event $event) {
        $view = null;
        $payment_status = auth()->user()->getPaymentStatus($event);

        // User hasn't register
        if (!$payment_status) {
            $view = view('dashboard.event-register-form', [
                'event' => $event,
                'bills' => $event->bills()->orderBy('bank_name', 'DESC')->get()
            ]);
        } // Payment is waiting for verification
        else if ($payment_status == 'pending') {
            $view = view('dashboard.register-status', [
                'status' => 'pending'
            ]);
        } // Payment failed
        else if ($payment_status == 'failed') {
            $view = view('dashboard.register-status', [
                'status' => 'failed'
            ]);
        } // Payment success
        else if ($payment_status == 'success') {
            $view = view('dashboard.register-status', [
                'status' => 'success'
            ]);
        } else {
            abort(403, 'Status pembayaran tidak terdifinisi');
        }

        return $view;
    }

    public function store(Event $event) {
        dd(1);
    }
}
