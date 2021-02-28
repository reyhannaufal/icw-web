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
                'Paper Competition ICW 2021 merupakan Kompetisi essay yang diperuntukkan untuk mahasiswa 
                se-Indonesia sebagai sarana mengaktualisasikan ide dan inovasinya dalam bidang korosi dengan mengangkat 
                tema “Mewujudkan pengembangan inovasi pengendalian korosi secara optimal.'
            ],
            [
                'Corrosion Workshop', '0', 'non-competition', '2021/05/21', '2021/05/21', 'Program pelatihan untuk mahasiswa dalam bentuk simulasi dengan pemberian study case mengenai korosi. Selain itu, workshop ini juga memberikan tambahan kualifikasi profesi serta kecakapan diri.
                '
            ],
            [
                'Symposium', '0', 'non-competition', '2021/05/22', '2021/05/22', 'Symposium yang membahas tentang korosi serta aplikasi penanggulangannya di bidang industri dan manufaktur, khususnya bidang Energi Baru dan Terbarukan (EBT) yang akan dipresentasikan oleh pembicara yang ahli dibidangnya. Symposium ICW 2021 dikemas berupa dialog interaktif serta diskusi antara narasumber dan peserta.'
            ],
            [
                'Workshop Career Building', '0', 'non-competition', '2021/05/02', '2021/05/02', 'Program pelatihan untuk mahasiswa dalam mengenal dunia pekerjaan yang disampaikan oleh HRD (Human Resources Development) di suatu perusahaan. Workshop ini memberikan wawasan mengenai pembuatan dan pengaplikasian CV yang sesuai dengan kriteria ideal perusahaan di Indonesia, serta tahapan dan tata cara interview kerja.'
            ],
            [
                'ICW Virtual Talks', '0', 'non-competition', '2021/04/11', '2021/04/11', 'I-V Talks atau ICW Virtual Talks merupakan salah satu sub-event dari Indonesian Corrosion Week (ICW) berupa rangkaian kegiatan webinar mengenai pengembangan softskill dengan tema menarik yang ditujukan untuk mahasiswa ITS, mahasiswa se-Indonesia, dan masyarakat umum.'
            ]
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
