<?php

namespace Database\Seeders\Test;

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
            ->count(3)
            ->create();

        // Make 3 free events
        Event::factory()
            ->count(3)
            ->create(['price' => 0]);

        $events = Event::all();

        // Define event name
        $names = [
            'Paper Competition',
            'Corrosion Workshop',
            'Symposium',
            'Workshop Career Building',
            'ICW Virtual Talks',
            'Business Case Webinar',
        ];

        $i = 0;
        // Give each event appropriate name
        foreach ($events as $event) {

            // Update type to 'competition' on first row
            if ($event == $events->first()) {
                $event->update(['type' => 'competition']);
            }
            $event->update(['name' => $names[$i]]);
            $i = ($i < count($names)) ? ($i + 1) : 0;
        }
    }
}
