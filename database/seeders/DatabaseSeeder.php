<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Bill;
use Carbon\Carbon;
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
//        \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            EventSeeder::class,
            BillSeeder::class
        ]);

        // Get all user, event, and bill
        $users = User::all();
        $events = Event::all();
        $bills = Bill::all();

        // Populate event_user pivot table
        $users->each(
            function ($user) use ($events) {
                $user->events()->attach(
                    $events->random(rand(1, 3))->pluck('id')->toArray(),
                    ['created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
                );
            }
        );

        // Populate bill_event pivot table
        $events->each(
            function ($event) use ($bills) {
                $event->bills()->attach(
                    $bills->random(rand(1, 3))->pluck('id')->toArray(),
                    ['created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
                );
            }
        );
    }
}
