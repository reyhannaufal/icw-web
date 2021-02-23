<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Bill;
use App\Models\Messages;
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
            BillSeeder::class,
            AnnouncementSeeder::class,
            MessagesSeeder::class
        ]);
        $events = Event::all();
        $bills = Bill::all();

        // Get admin account
        $adm_users = User::where('id', '<=', count($events))->get();

        // Get 10 users excluding the admin account
        $users = User::orderBy('id', 'asc')->where('id', '>', count($events))->take(10)->get();

        // Update the first three account (admin account) with admin credentials
        for ($i = 0; $i < count($events); $i++) {
            $adm_users[$i]->update([
                'name' => 'Admin ' . $events[$i]->name,
                'email' => 'admin' . ($i + 1) . '@admin.com',
                'password' => bcrypt('12345678')
            ]);
        }

        // Populate event_user pivot table
        $users->each(
            function ($user) use ($events) {
                $user->events()->attach(
                    $events->random(rand(1, 3))->pluck('id')->toArray(), [
                        'payment_status' => 'success',
                        'payment_receipt_path' => 'payment_receipts/default.png',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]
                );
                // the second user will get failed verification
                $user->events()->update([
                    'payment_status' => ($user->id == 2) ? 'pending' : 'success'
                ]);
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
