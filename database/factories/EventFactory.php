<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $start_at = $this->faker->dateTimeBetween('next Monday', 'next Monday +7 days');
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => strval($this->faker->randomNumber()),
//            'type' => $this->faker->randomElement(['competition', 'non-competition']),
            'start_at' => $start_at,
            'end_at' => $this->faker->dateTimeBetween($start_at, $start_at->format('Y-m-d H:i:s').' +2 days'),
        ];
    }
}
