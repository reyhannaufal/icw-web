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
        $view = null;
        $payment_status = auth()->user()->getPaymentStatus($event);

        if (!$payment_status) {
            if ($event->isFree()) {
                $view = view('dashboard.user.status-card', [
                    'event_name' => $event->name,
                    'status' => '',
                    'price' => 'Gratis',
                    'text' => 'Klik tombol "Daftar Sekarang" untuk daftar di event ini.',
                    'rgba' => 'rgba(183, 221, 213, 0.6)'
                ]);
            } else {
                if ($event->name == 'Paper Competition') {
                    $payment_info = $this->getBranch(Carbon::now());
                    if (!isset($payment_info)) {
                        abort(404);
                    }
                    $view = view('dashboard.user.pay-form', [
                        'event' => $event,
                        'bills' => $event->bills()->orderBy('bank_name', 'DESC')->get(),
                        'payment_info' => $payment_info
                    ]);
                } else {
                    $view = view('dashboard.user.pay-form', [
                        'event' => $event,
                        'bills' => $event->bills()->orderBy('bank_name', 'DESC')->get()
                    ]);
                }
            }
        }
        else {
            // Payment is waiting for verification
            $data = [
                'event_name' => $event->name,
                'status' => ucfirst($payment_status),
            ];

            if ($payment_status == 'pending') {
                $data['price'] = 'Rp. ' . $event->price;
                $data['text'] = 'Pembayaran Anda sedang diproses';
                $data['rgba'] = 'rgba(241, 213, 168, 0.507);';
            } // Payment failed
            else if ($payment_status == 'failed') {
                $data['price'] = 'Rp. ' . $event->price;
                $data['text'] = 'Pembayaran Anda ditolak, hubungi penanggung jawab event ini untuk info lebih lanjut';
                $data['rgba'] = 'rgba(240, 174, 172, 0.6);';
            } // Payment success
            else if ($payment_status == 'success') {
                $data['price'] = ($event->isFree()) ? 'Gratis' : 'Rp. ' . $event->price;
                $data['text'] = 'Selamat, Anda dapat mengikuti event ini. Untuk info lebih lanjut, buka menu info event.';
                $data['rgba'] = 'rgba(183, 221, 213, 0.6);';
            } else {
                abort(403, 'Status pembayaran tidak terdefinisi');
            }
            if ($event->name == 'Paper Competition') {
                $payment_info = $this->getBranch(Carbon::now());
                if (!isset($payment_info)) {
                    abort(404);
                }
                $data['price'] = null;
            }
            $view = view('dashboard.user.status-card', $data);
        }
        return $view;
    }

    public function store(Event $event)
    {
        if ($event->isFree()) {
            Auth::user()->events()->attach($event->id, [
                'payment_status' => 'success',
            ]);
            request()->user()->notify(new PaymentStatus('success', $event->name, Auth::user()->name));
            return redirect()
                ->route('events.show', Str::slug($event->name, '-'))
                ->with('success','Pendaftaran Sukses!');
        } else {
            $attributes = request()->validate([
                'payment_receipt' => [
                    'required',
                    'image',
                    'max:1024'
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
            return back()->with('success','Pendaftaran Sukses!');
        }
    }

    public function getBranch(Carbon $now) {
        $branchs_date = [
            Carbon::create(2021, 3, 26, 23, 59, 59),
            Carbon::create(2021, 4, 9, 23, 59, 59),
            Carbon::create(2021, 4, 17, 23, 59, 59),
        ];

        if ($now < $branchs_date[0]) {
            $data = [
                'branch' => 'Branch 1',
                'branch_price' => '35.000',
            ];
        } else if ($now < $branchs_date[1]) {
            $data = [
                'branch' => 'Branch 2',
                'branch_price' => '40.000',
            ];
        } else if ($now < $branchs_date[2]) {
            $data = [
                'branch' => 'Branch 2',
                'branch_price' => '45.000',
            ];
        } else {
            $data = null;
        }
        return $data;
    }

    public function resetStatus(Event $event)
    {
        $event->deleteFile('payment_receipt', auth()->user()->id);
        $event->usersWithPivot()->detach(auth()->user()->id);

        return back()->with('success','Reset status pembayaran sukses!');
    }
}
