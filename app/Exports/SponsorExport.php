<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SponsorExport implements FromQuery, WithHeadings
{
    public function query()
    {
        $table = DB::table('sponsorships');
        $table = $table->select(
            'first_name',
            'last_name',
            'institution',
            'email',
            'phone_number',
            'option',
            'created_at'
        )->orderBy('first_name');
        return $table;
    }

    public function headings(): array
    {
        // For users data per event
        $header = [
            'Nama Pertama',
            'Nama Kedua',
            'Email',
            'Institusi',
            'Nomor Telepon',
            'Jenis Partner',
            'Nomor Telepon'
        ];
        return $header;
    }
}
