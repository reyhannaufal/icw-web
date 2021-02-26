<?php

namespace Database\Factories;

use App\Models\Messages;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Messages::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'institution' => $this->faker->company,
            'email' => $this->faker->email,
            'phone_number' => $this->faker->phoneNumber,
            'message' => $this->faker->text()
        ];
    }
}
