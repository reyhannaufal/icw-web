<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Isi berdasarkan semua event yg ada
        // Passwrodnya boleh dirandom

        // Admin <nama event>, email, password
        $admins = [
            ['Admin Paper Competition', 'papercompetition@admin.com', 'AKUadminpaper'],
            ['Admin Corrosion Workshop', 'corrotionworkshop@admin.com', 'AKUadmincorrosion'],
            ['Admin Symposium', 'symposium@noreply.co', 'AKUadminsymposium'],
            ['Admin Workshop Career Building', 'workshopcareer@admin.com', 'AKUadmincareer'],
            ['Admin ICW Virtual Talks', 'virtualtalks@admin.com', 'AKUadminvirtual'],
            // event selanjutnya...
            ['Master Admin', 'master@admin.com', 'kepodehkamu#2021'],
        ];
        $count = count($admins);
        for ($i = 0; $i < $count; $i++) {
            User::create([
                'name' => $admins[$i][0],
                'email' =>  $admins[$i][1],
                'password' => bcrypt($admins[$i][2]),
                'institution' => 'Indocor ITS',
                'phone_number' => '000000000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
