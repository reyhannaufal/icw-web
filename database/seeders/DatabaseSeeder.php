<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // Aktifkan salah satu
            // Test\TestSeeder::class // Seeder for testing
           ProductionSeeder::class // Sedder for production
        ]);
    }
}
