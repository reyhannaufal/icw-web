<?php

namespace App\Models;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Log;

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
            ->withPivot('payment_status', 'payment_receipt_path', 'gdrive_path');
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
        } else if ($precision == 'day number') {
            $date = $date->format('d M Y');
        } else {
            abort(404, 'Unknown date precision');
        }
        return $date;
    }

    public function deleteFile($type, $user_id, $status = null)
    {
        if ($type != 'paper') {
            $pivot_table = $this->usersWithPivot();
            $pivot_table->updateExistingPivot($user_id, [
                'payment_status' => $status,
                'updated_at' => Carbon::now()
            ]);
            $path = $pivot_table->find($user_id)->participation->payment_receipt_path;
        } else {
            $pivot_table = $this->usersWithPaper();
            $path = $pivot_table->find($user_id)->participation->paper_path;
        }

        // If not default file --> delete file
        if (isset($path) && $path != 'papers/dummy.pdf' && $path != 'payment_receipts/default.png') {
            $delete_success = $this->deleteLocalFile($path);
        } else {
            $delete_success = true;
        }

        // change path to null if image is deleted successfully
        if ($delete_success) {
            $submit_data['gdrive_path'] = null;
            if ($type == 'paper') {
                $submit_data['paper_path'] = null;
            } else {
                $submit_data['payment_receipt_path'] = null;
            }
            $pivot_table->updateExistingPivot($user_id, $submit_data);
        }
        return $delete_success;
    }

    public function getBatch($currUser = false) {
        if ($this->name != 'Paper Competition') {
            return null;
        }

        $now = ($currUser)
            ? auth()->user()->events()
                ->where('events.id', $this->attributes['id'])
                ->first()
                ->participation
                ->created_at
            : Carbon::now();
        $batchs_date = [
            Carbon::create(2021, 3, 26, 23, 59, 59),
            Carbon::create(2021, 4, 9, 23, 59, 59),
            Carbon::create(2021, 4, 17, 23, 59, 59),
        ];

        if ($now < $batchs_date[0]) {
            $data = [
                'batch' => 'Batch 1',
                'batch_price' => '35.000',
            ];
        } else if ($now < $batchs_date[1]) {
            $data = [
                'batch' => 'Batch 2',
                'batch_price' => '40.000',
            ];
        } else if ($now < $batchs_date[2]) {
            $data = [
                'batch' => 'Batch 3',
                'batch_price' => '45.000',
            ];
        } else {
            $data = null;
        }
        return $data;
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

    public function notExpired()
    {
        return $this->attributes['end_at'] > Carbon::now();
    }
}
