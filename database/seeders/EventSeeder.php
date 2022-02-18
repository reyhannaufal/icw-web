<?php

namespace Database\Seeders;

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
                'Paper Competition', '1', 'competition', '2022/03/07', '2022/04/17',
                'Paper Competition ICW 2021 merupakan Kompetisi essay yang diperuntukkan untuk mahasiswa
                se-Indonesia sebagai sarana mengaktualisasikan ide dan inovasinya dalam bidang korosi dengan mengangkat
                tema “Mewujudkan pengembangan inovasi pengendalian korosi secara optimal.',
                'Indra Carllistya Pramadio', 'manamimushiiii', '085784779129', ' indra@pramadio.com', 'https://intip.in/GuidebookPaperCompICW2021/', ''
            ],
            [
                'Corrosion Workshop', '10000', 'non-competition', '2022/05/21', '2022/05/21', 'Program pelatihan untuk mahasiswa dalam bentuk simulasi dengan pemberian study case mengenai korosi. Selain itu, workshop ini juga memberikan tambahan kualifikasi profesi serta kecakapan diri.
                ', 'Bazighoh Fattatin' , 'zhig.aa' , '082335982156', 'bazighohfattatin@gmail.com', 'https://www.google.com/', 'https://us02web.zoom.us/j/87118566244'
            ],
            [
                'Symposium', '0', 'non-competition', '2022/05/22', '2022/05/22',
                'Symposium yang membahas tentang korosi serta aplikasi penanggulangannya di bidang
                industri dan manufaktur, khususnya bidang Energi Baru dan Terbarukan (EBT) yang akan dipresentasikan oleh pembicara yang ahli dibidangnya. Symposium ICW 2021 dikemas berupa dialog interaktif serta diskusi antara narasumber dan peserta.',
                'Lutfi Nur Aini', 'ltfnraini', '081332898488', 'lutfinuraini24@gmail.com', 'https://www.google.com/', 'https://us02web.zoom.us/j/87118566244'
            ],
            [
                'Workshop Career Building', '0', 'non-competition', '2022/05/02', '2022/05/02', 'Program pelatihan untuk mahasiswa dalam mengenal dunia pekerjaan yang disampaikan oleh HRD (Human Resources Development) di suatu perusahaan. Workshop ini memberikan wawasan mengenai pembuatan dan pengaplikasian CV yang sesuai dengan kriteria ideal perusahaan di Indonesia, serta tahapan dan tata cara interview kerja.',
                'I Gede Made Budari Dwi P', 'made_budari', '081936056416', 'madebudari7@gmail.com', 'https://www.google.com/',
                'https://us02web.zoom.us/j/87118566244'
            ],
            [
                'ICW Virtual Talks', '0', 'non-competition', '2022/01/11', '2022/01/11', 'I-V Talks atau ICW Virtual Talks merupakan salah satu sub-event dari Indonesian Corrosion Week (ICW) berupa rangkaian kegiatan webinar mengenai pengembangan softskill dengan tema menarik yang ditujukan untuk mahasiswa ITS, mahasiswa se-Indonesia, dan masyarakat umum.',
                'Rafenra Rakha Rasendria', 'rafenrasendria8', '087880497781', 'rafenrasendria@gmail.com', 'https://www.google.com/',
                'https://us02web.zoom.us/j/87118566244'
            ]
        ];
        $count = count($events);
        for ($i = 0; $i < $count; $i++) {
            $startAt = ($i == 0) ? $events[$i][3] : $events[$i][3] . ' 16:00:00';
            $endAt = ($i == 0) ? $events[$i][3] . ' 23:59:59' : $events[$i][4] . ' 18:00:00';
            Event::create([
                'name' => $events[$i][0],
                'price' => $events[$i][1],
                'type' => $events[$i][2],
                'start_at' => $startAt,
                'end_at' => $endAt,
                'description' => $events[$i][5],
                'lead_name' => $events [$i][6],
                'id_line' => $events [$i][7],
                'phone_number' => $events[$i][8],
                'lead_email' => $events[$i][9],
                'guidebook' => $events[$i][10],
                'zoom_link' => ($events[$i][11] == '') ? null : $events[$i][11],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
