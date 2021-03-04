<?php

namespace Database\Seeders;
use App\Models\Announcement;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $announcements = [
            [
                'Penerimaan Email Notifikasi',
                'Jika Anda tidak menemukan email notifikasi pendaftaran di inbox, coba cek folder spam. ' .
                'Hapus label "Spam" yang ada di bawah judul email untuk menerima email Indocor berikutnya di inbox.'
            ]
        ];
        $count = count($announcements);
        for ($i = 0; $i < $count; $i++) {
            Announcement::create([
                'title' => $announcements[$i][0],
                'body' =>  $announcements[$i][1],
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
