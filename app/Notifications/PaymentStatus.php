<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentStatus extends Notification
{
    use Queueable;

    public $status;
    public $event_name;
    public $user_name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($status, $event_name, $user_name)
    {
        $this->status = $status;
        $this->event_name = $event_name;
        $this->user_name = $user_name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $text = null;

        switch ($this->status) {
            case "pending":
                $text = "Bukti pembayaran Anda telah terkirim. " .
                    "Tunggu beberapa saat hingga pembayaran diverifikasi oleh admin. " .
                    "Notifikasi selanjutnya akan dikirim menuju email ini.";
                break;
            case "failed":
                $text = "Maaf, bukti pembayaran Anda tidak valid. " .
                    "Upload bukti pembayaran valid Anda atau hubungi kami untuk bantuan lebih lanjut.";
                break;
            case "success":
                $text = "Selamat, Anda dapat mengikuti event " . $this->event_name . '. ' .
                    "Segera kunjungi menu dashboard event di website kami untuk info lebih lanjut.";
                break;
            default:
                $text = 'Error, status tidak valid. Abaikan pesan ini atau hubungi kami jika ada kendala lain. ';
        }
        return (new MailMessage)
            ->subject("Status Pembayaran Event " . $this->event_name)
            ->greeting("Halo, " . $this->user_name)
            ->line($text)
            ->action('Dashboard Events', url('http://127.0.0.1:8000/events'))
            ->line('Terima kasih sudah berpartisipasi dalam event kami.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
