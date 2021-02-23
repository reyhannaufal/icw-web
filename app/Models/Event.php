<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];
    /**
     * @var mixed
     */
    private $id;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function usersWithPivot()
    {
        return $this->belongsToMany(User::class)
            ->as('participation')
            ->withTimestamps()
            ->withPivot('payment_status', 'payment_receipt_path');
    }

    public function bills()
    {
        return $this->belongsToMany(Bill::class);
    }

    public function isFree()
    {
        return $this->price == 0;
    }

    public function countRowsOnStatus($status)
    {
        return $this->users()->where('payment_status', $status)->count();
    }
}
