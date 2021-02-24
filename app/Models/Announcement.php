<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body'
    ];

    protected $guarded = [];

    public function timeline() {
        return self::latest()
            ->paginate(config('pagination'));
    }
}
