<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentStatus;
use App\Models\Event;
use Auth;
use Str;

class EventController extends Controller
{
    public function show(Event $event)
    {
        return view('pages.event.info', [
            'event' => $event
        ]);
    }

    public function create(Event $event)
    {
        $view = null;
        $payment_status = auth()->user()->getPaymentStatus($event);

        // If event isn't free
        if ($event->price != 0) { // User hasn't register
            if (!$payment_status) {
                $view = view('dashboard.user.event-register-form', [
                    'event' => $event,
                    'bills' => $event->bills()->orderBy('bank_name', 'DESC')->get()
                ]);
            } // Payment is waiting for verification
            else if ($payment_status == 'pending') {
                $view = view('dashboard.user.register-status', [
                    'status' => 'pending',
                    'payment_receipt' => Auth::user()->getPaymentReceipt($event)
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
        } else {
            if (Auth::user()->isRegistered($event)) {
                Auth::user()->events()->attach($event->id);
            }
            $view = view('dashboard.user.register-status', [
                'status' => 'success'
            ]);
        }

        return $view;
    }

    public function store(Event $event)
    {
        $attributes = request()->validate([
            'payment_receipt' => [
                'required',
                'image',
            ],
        ]);

        $file_type = request('payment_receipt')->extension();
        $file_path = 'payment_receipts/' . Str::slug($event->name, '_');
        $file_name = Str::slug(Auth::user()->name, '_') . '.' . $file_type;
        $attributes['payment_receipt'] = request('payment_receipt')->storeAs($file_path, $file_name);

        Auth::user()->events()->attach($event->id, [
            'payment_status' => 'pending',
            'payment_receipt_path' => $attributes['payment_receipt']
        ]);
        request()->user()->notify(new PaymentStatus('pending', $event->name, Auth::user()->name));

        return back()->with('success','Register successfully!');
    }
}
