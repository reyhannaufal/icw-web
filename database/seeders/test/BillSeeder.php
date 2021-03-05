<?php

namespace Database\Seeders\test;

use Illuminate\Database\Seeder;
use App\Models\Bill;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bill::factory()
            ->count(4)
            ->create();
    }


}
