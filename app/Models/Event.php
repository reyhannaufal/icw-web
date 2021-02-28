<?php

namespace App\Models;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Log;
use Str;
use Throwable;

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

    public function deleteFile($type, $user_id, $status = null)
    {
        $pivot_table = $this->usersWithPivot();
        if ($type != 'paper') {
            $pivot_table->updateExistingPivot($user_id, [
                'payment_status' => $status,
                'updated_at' => Carbon::now()
            ]);
            $path = $pivot_table->first()->participation->payment_receipts_path;
        } else {
            $path = $pivot_table->first()->participation->paper_path;
        }
        $delete_success = false;

        // If not default file --> delete file
        if (isset($path) && $path != 'papers/dummy.pdf' && $path != 'payment_receipts/default.png') {
            $delete_success = $this->deleteLocalFile($path);
        }

        // change path to null if image is deleted successfully
        if ($delete_success) {
            if ($type == 'paper') {
                $pivot_table->updateExistingPivot($user_id, [
                    'paper_path' => null,
                ]);
            } else {
                $pivot_table->updateExistingPivot($user_id, [
                    'payment_receipts' => null,
                ]);
            }
        }
        return $delete_success;
    }

    public function deleteLocalFile($path_to_file)
    {
        if (File::exists(public_path('storage/' . $path_to_file))) {
            File::delete(public_path('storage/' . $path_to_file));
            return true;
        } else {
            Log::info('File not found!');
        }
        return false;
    }
}
