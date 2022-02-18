<?php

namespace Database\Seeders\test;

use App\Models\Bill;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
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
            BillSeeder::class,
            AnnouncementSeeder::class,
            MessagesSeeder::class,
            PartnerSeeder::class
        ]);

        $events = Event::all();
        $bills = Bill::all();
        $status = ['success', 'pending', 'failed'];
        $count_event = count($events);

        // Get 20 users excluding the admin account
        $users = User::orderBy('id', 'asc')->where('id', '>', $count_event + 1)->take(20)->get();

        // first event will have a minimum of 20 pending user
        $events->first()->users()->attach(
            $users->random(20)->pluck('id')->toArray(), [
                'payment_status' => 'pending',
                'payment_receipt_path' => 'payment_receipts/default.png',
                'paper_path' => 'papers/dummy.pdf',
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
                        'gdrive_path' => 'https://drive.google.com/drive/folders/1j-INK9t6Iq5RAabfM-aKuCwBLMOgi5Zm?usp=sharing',
                        'created_at'  => Carbon::now(),
                        'updated_at'  => Carbon::now()
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
