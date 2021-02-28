<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
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

    public function usersWithPaper()
    {
        return $this->belongsToMany(User::class)
            ->as('participation')
            ->withTimestamps()
            ->withPivot('paper_path', 'paper_grade')
            ->whereNotNull('paper_path');
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

    public function getDate($collumn, $precision = 'minute')
    {
        $date = Carbon::parse($this->attributes[$collumn]);

        if ($precision == 'minute') {
            $date = $date->format('l, d M Y H:i');
        } else if ($precision == 'day') {
            $date = $date->format('l, d M Y');
        } else if ($precision == 'only minute') {
            $date = $date->format('H:i');
        } else {
            abort(404, 'Unknown date precision');
        }
        return $date;
    }
}
