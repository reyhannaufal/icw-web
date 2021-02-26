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
        return DB::table('users')
            ->join('event_user', 'users.id', '=', 'event_user.user_id')
            ->select('users.name', 'users.email',
                'users.institution', 'users.phone_number')
            ->where('event_user.event_id', '=', $this->event_id)
            ->orderBy('users.id');
    }

//    /**
//     * @var User $user
//     */
//    public function map($user): array
//    {
//        return [
//            $user->id,
//            $user->name,
//            $user->email,
//            $user->institution,
//            $user->phone_number,
//            $user->participation->event_id,
//        ];
//    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Institusi',
            'Nomor Telepon',
        ];
    }
}
