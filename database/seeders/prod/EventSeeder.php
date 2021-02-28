<?php

namespace Database\Seeders\Prod;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Isi berdasarkan semua event yg ada

        // nama event, harga, tipe, tanggal mulai, tanggal selesai, deskripsi
            // Kolom pertama $events harus diisi dengan paper competition
            // Jika event gratis, price = 0
            // Jika event berlangsung selama satu hari
        $events = [
            [
                'Paper Competition', '0', 'competition', '2021/03/07', '2021/04/18',
                'Paper Competition ICW 2021 merupakan Kompetisi essay yang diperuntukkan untuk mahasiswa se-Indonesia sebagai sarana mengaktualisasikan ide dan inovasinya dalam bidang korosi dengan mengangkat tema “Mewujudkan pengembangan inovasi pengendalian korosi secara optimal.'
            ],
        ];
        $count = count($events);
        for ($i = 0; $i < $count; $i++) {
            Event::create([
                'name' => $events[$i][0],
                'description' => $events[$i][5],
                'price' => $events[$i][1],
                'type' => $events[$i][2],
                'start_at' => $events[$i][3],
                'end_at' => $events[$i][4],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}