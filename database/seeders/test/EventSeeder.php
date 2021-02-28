<?php

namespace Database\Seeders\Test;

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
        Event::factory()
            ->count(1)
            ->create();

        // Make 3 free events
        Event::factory()
            ->count(4)
            ->create(['price' => 0]);

        $events = Event::all();

        // Define event name
        $names = [
            'Paper Competition',
            'Corrosion Workshop',
            'Symposium',
            'Workshop Career Building',
            'ICW Virtual Talks',
        ];

        $descriptions = [
            'Paper Competition ICW 2021 merupakan Kompetisi essay yang diperuntukkan untuk mahasiswa se-Indonesia
            sebagai sarana mengaktualisasikan ide dan inovasinya dalam bidang korosi dengan mengangkat tema
            “Mewujudkan pengembangan inovasi pengendalian korosi secara optimal.”',

            'Program pelatihan untuk mahasiswa dalam bentuk simulasi dengan pemberian study case mengenai korosi.
            Selain itu, workshop ini juga memberikan tambahan kualifikasi profesi serta kecakapan diri.',

            'Symposium yang membahas tentang korosi serta aplikasi penanggulangannya di bidang industri dan
            manufaktur, khususnya bidang Energi Baru dan Terbarukan (EBT) yang akan dipresentasikan oleh pembicara yang
            ahli dibidangnya. Symposium ICW 2021 dikemas berupa dialog interaktif serta diskusi antara narasumber dan
            peserta.',

            'Program pelatihan untuk mahasiswa dalam mengenal dunia pekerjaan yang disampaikan oleh HRD (Human Resources Development)
            di suatu perusahaan. Workshop ini memberikan wawasan mengenai pembuatan dan pengaplikasian CV yang sesuai dengan kriteria ideal
            perusahaan di Indonesia, serta tahapan dan tata cara interview kerja.',

            'I-V Talks atau ICW Virtual Talks merupakan salah satu sub-event dari Indonesian Corrosion Week (ICW) berupa
            rangkaian kegiatan webinar mengenai pengembangan softskill dengan tema menarik yang ditujukan untuk mahasiswa
            ITS, mahasiswa se-Indonesia, dan masyarakat umum.'

        ];


        $i = 0;
        // Give each event appropriate name
        foreach ($events as $event) {

            // Update type to 'competition' on first row
            if ($event == $events->first()) {
                $event->update(['type' => 'competition']);
            }
            $event->update(['name' => $names[$i]]);
            $event->update(['description' => $descriptions[$i]]);

            $i = ($i < count($names)) ? ($i + 1) : 0;
        }
    }
}
