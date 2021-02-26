<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use function PHPUnit\Framework\isNull;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'institution'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function events() {
        return $this->belongsToMany(Event::class)
            ->as('participation')
            ->withTimestamps()
            ->withPivot('payment_status', 'payment_receipt_path');
    }

    public function getPaymentStatus(Event $event) {
        $data = $this->events()
            ->wherePivot('event_id', $event->id)
            ->first();

        if ($data != null) {
            $data = $data->participation->payment_status;
        }
        return $data;
    }

    public function getPaymentReceipt(Event $event) {
        $path = $this->events()->where('event_id', $event->id)->pluck('payment_receipt_path')->first();
        return asset('storage/' . $path);
    }

    public function isRegistered(Event $event) {
        return !isNull($event->users()->where('user_id', $this->id)->first());
    }

    public function isAdmin() {
        return $this->id <= Event::all()->count();
    }
}
