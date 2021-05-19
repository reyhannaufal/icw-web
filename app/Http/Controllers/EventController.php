<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentStatus;
use App\Models\Event;
use Auth;
use Carbon\Carbon;
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
        $payment_status = auth()->user()->getPaymentStatus($event);

        if (!$payment_status) {
            $data = [
                'event' => $event,
                'bills' => $event->bills()->orderBy('bank_name', 'DESC')->get()
            ];
            if ($event->name == 'Paper Competition') {
                $payment_info = $event->getBatch();
                if (!isset($payment_info)) {
                    abort(404);
                }
                $data['payment_info'] = $payment_info;
            }
            $view = view('dashboard.user.pay-form', $data);
        }
        else {
            // Payment is waiting for verification
            $data = [
                'event_name' => $event->name,
                'status' => ucfirst($payment_status),
            ];

            if ($payment_status == 'pending') {
                $data['price'] = 'Rp. ' . number_format($event->price, 0, ',', '.');
                $data['text'] = 'Pendaftaran Anda sedang diproses';
                $data['rgba'] = 'rgba(241, 213, 168, 0.507);';
            } // Payment failed
            else if ($payment_status == 'failed') {
                $data['price'] = 'Rp. ' . number_format($event->price, 0, ',', '.');
                $data['text'] = 'Pendaftaran Anda ditolak, hubungi penanggung jawab event ini untuk info lebih lanjut';
                $data['rgba'] = 'rgba(240, 174, 172, 0.6);';
            } // Payment success
            else if ($payment_status == 'success') {
                $data['price'] = ($event->isFree()) ? 'Gratis' : 'Rp. ' . number_format($event->price, 0, ',', '.');
                $data['text'] = 'Selamat, Anda dapat mengikuti event ini. Untuk info lebih lanjut, buka menu info event.';
                $data['rgba'] = 'rgba(183, 221, 213, 0.6);';
            } else {
                abort(403, 'Status pembayaran tidak terdefinisi');
            }

            if ($event->name == 'Paper Competition') {
                $payment_info = $event->getBatch(true);
                if (!isset($payment_info)) {
                    abort(404);
                }
                $data['price'] = 'Rp. ' . $payment_info['batch_price'];
                $data['batch_name'] = $payment_info['batch'];
            }
            $view = view('dashboard.user.status-card', $data);
        }
        return $view;
    }

    public function store(Event $event)
    {
        $input = [];
        if ($event->name != 'Paper Competition' && $event->name != 'Workshop Career Building') {
            $input['gdrive'] = 'required|string|gdrive|max:127';
        }
        if (!$event->isFree()) {
            $input['payment_receipt'] = 'required|image|max:1024';
        }
        $attributes = request()->validate($input);

        if ($event->name != 'Paper Competition' && $event->name != 'Workshop Career Building') {
            $store_data['gdrive_path'] = $attributes['gdrive'];
        }
        if (!$event->isFree()) {
            // store in local folder and rename payment_receipt
            $file_type = request('payment_receipt')->extension();
            $file_path = 'payment_receipts/' . Str::slug($event->name, '_');
            $file_name = Str::slug(Auth::user()->name, '_') . '.' . $file_type;
            $attributes['payment_receipt'] = request('payment_receipt')->storeAs($file_path, $file_name);

            $store_data['payment_receipt_path'] = $attributes['payment_receipt'];
        }
        $store_data['payment_status'] = 'pending';
        Auth::user()->events()->attach($event->id, $store_data);
        request()->user()->notify(new PaymentStatus($store_data['payment_status'], $event->name, Auth::user()->name));
        return back()->with('success','Pendaftaran Sukses!');
    }

    public function resetStatus(Event $event)
    {
        $event->deleteFile('payment_receipt', auth()->user()->id);
        $event->usersWithPivot()->detach(auth()->user()->id);

        return back()->with('success','Reset status pembayaran sukses!');
    }
}
