<?php

namespace Database\Seeders\Prod;

use App\Models\Bill;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Database\Seeders\Test;
use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            EventSeeder::class,
        ]);
    }
}
