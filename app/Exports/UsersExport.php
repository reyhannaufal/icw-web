<?php

namespace App\Exports;

use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromQuery, WithHeadings
{

    public function __construct(int $event_id)
    {
        $this->event_id = $event_id;
    }

    public function query()
    {
        $table = DB::table('users')
            ->join('event_user', 'users.id', '=', 'event_user.user_id');

        // Users data per event
        if ($this->event_id != 0) {
            $table = $table->select('users.name', 'users.email',
                    'users.institution', 'users.phone_number', 'event_user.created_at')
                ->where('event_user.event_id', '=', $this->event_id);
        } else {
            // Data of all registered users
            $table = $table->join('events', 'events.id', '=', 'event_user.event_id')
                ->select(
                'users.name AS username',
                    'users.email',
                    'users.institution',
                    'users.phone_number',
                    'events.name AS eventname',
                    'event_user.created_at'
                )
                ->orderBy('eventname');
        }
        return $table->orderBy('users.name');
    }

    public function headings(): array
    {
        // For users data per event
        $header = [
            'Nama',
            'Email',
            'Institusi',
            'Nomor Telepon'
        ];

        // For data of all users
        if ($this->event_id == 0) {
            array_push($header, 'Nama Event');
        }
        array_push($header, 'Tanggal Daftar');
        return $header;
    }
}
