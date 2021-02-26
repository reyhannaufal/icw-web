<?php

namespace App\Exports;

use App\Models\Event;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromQuery, WithHeadings
{
    public function __construct(int $event_id)
    {
        $this->$event_id = $event_id;
    }

    public function query()
    {
//        return User::query()->;
    }

    /**
     * @var User $user
     */
    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->email,
            $user->institution,
            $user->phone_number,
            $user->participation->event_id,
        ];
    }

    public function headings(): array
    {
        return [
            'Id',
            'Name',
            'Email',
            'Institusi',
            'Nomor Telepon',
            'Event',
        ];
    }
}
