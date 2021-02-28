<?php

namespace Database\Seeders\Prod;

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
            ['Admin Paper Competition', 'papercompetition@admin.com', '12345678'],
            ['Admin Corrosion Workshop', 'corrotionworkshop@admin.com', '12345678'],
            ['Admin Symposium', 'symposium@noreply.com', '12345678'],
            ['Admin Workshop Career Building', 'workshopcareer@admin.com', '12345678'],
            ['Admin ICW Virtual Talks', 'virtualtalks@admin.com', '12345678'],
            // event selanjutnya...
            ['Master Admin', 'master@admin.com', '12345678'],
        ];
        $count = count($admins);
        for ($i = 0; $i < $count; $i++) {
            $email = (($i == $count - 1) ? 'masteradmin' : 'admin' . ($i + 1)) . '@admin.com';

            User::create([
                'name' => $admins[$i][0],
                'email' => $email,
                'password' => bcrypt($admins[$i][1]),
                'institution' => 'Indocor ITS',
                'phone_number' => '000000000000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
