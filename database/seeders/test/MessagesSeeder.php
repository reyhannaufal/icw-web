<?php

namespace Database\Seeders\test;

use Illuminate\Database\Seeder;
use App\Models\Messages;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Messages::factory()
            ->count(4)
            ->create();
    }
}
