<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaperDeleted extends Notification
{
    use Queueable;

    public $user_name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user_name)
    {
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
        $text = "Paper yang anda submit di Event Paper Competition ICW telah dihapus oleh admin. " .
            "Submit ulang paper yang memenuhi persyaratan atau hubungi kami untuk info lebih lanjut.";
        return (new MailMessage)
                ->subject("Status Paper di Event Paper Competition ICW")
                ->greeting("Halo, " . $this->user_name)
                ->line($text)
                ->action('Dashboard Events', url('http://127.0.0.1:8000/dashboard'))
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
