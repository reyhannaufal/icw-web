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
        $this->call([
            UserSeeder::class,
            EventSeeder::class,
            BillSeeder::class,
            AnnouncementSeeder::class,
            MessagesSeeder::class
        ]);
        $events = Event::all();
        $bills = Bill::all();
        $status = ['success', 'pending', 'failed'];
        $count_event = count($events);

        // Get admin account + 1 master admin accout
        $adm_users = User::where('id', '<=', $count_event + 1)->get();

        // Get 20 users excluding the admin account
        $users = User::orderBy('id', 'asc')->where('id', '>', $count_event + 1)->take(20)->get();

        // Update admin and master admin account with its credentials
        for ($i = 0; $i < $count_event + 1; $i++) {
            if ($i < $count_event) {
                $adm_users[$i]->update([
                    'name' => 'Admin ' . $events[$i]->name,
                    'email' => 'admin' . ($i + 1) . '@admin.com',
                ]);
            } else {
                $adm_users[$i]->update([
                    'name' => 'Master Admin',
                    'email' => 'masteradmin' . '@admin.com',
                ]);
            }
        }

        // first event will have a minimum of 20 pending user
        $events->first()->users()->attach(
            $users->random(20)->pluck('id')->toArray(), [
                'payment_status' => 'pending',
                'payment_receipt_path' => 'payment_receipts/default.png',
                'paper_path' => 'paper/dummy.pdf',
                'paper_grade' => 0.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );

        // first event is free
        $events->first()->update(['price' => 0]);

        // remove first events
        $events = $events->filter(function ($event) {
            return $event->id != 1;
        });

        // Populate event_user pivot table
        $users->each(
            function ($user) use ($events, $status) {
                $user->events()->attach(
                    $events->random(rand(1, 3))->pluck('id')->toArray(), [
                        'payment_status' => $status[array_rand($status)],
                        'payment_receipt_path' => 'payment_receipts/default.png',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]
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
