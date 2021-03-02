<?php

namespace Database\Seeders\test;

use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Announcement::factory()
            ->count(5)
            ->create();

        $announcements = Announcement::all();

        // Define announcement title
        $titles = [
            'Pendaftaran ditutup 23 Juli!',
            'Event dilaksanakan pada 22 Februari 2021',
            'Terdapat bug pada Home tapi bohong!',
        ];
        $i = 0;

        // Give each announcement appropriate title
        foreach ($announcements as $announcement) {
            $announcement->update(['title' => $titles[$i]]);
            $i = ($i + 1 < count($titles)) ? ($i + 1) : 0;
        }
    }
}
