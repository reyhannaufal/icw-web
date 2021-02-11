<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::factory()
            ->count(6)
            ->create();
        $events = Event::all();

        // Define event name
        $names = [
            'Oil Rig Competition',
            'Stock Trading Competition',
            'Petrosmart Competition',
            'Paper Competition',
            'Business Case Competition',
            'Business Case Webinar',
        ];
        $i = 0;

        // Give each event appropriate name
        foreach ($events as $event) {
            $event->update(['name' => $names[$i]]);
            $i = ($i < count($names)) ? ($i + 1) : 0;
        }
    }
}
