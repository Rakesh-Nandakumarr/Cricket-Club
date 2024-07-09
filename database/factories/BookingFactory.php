<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            //make the factory generate random data for the columns
            'name' => $this->faker->name,
            'current_member' => $this->faker->boolean,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'booking_date' => $this->faker->date,
            'start_time' => $this->faker->time,
            'finish_time' => $this->faker->time,
            'function_type' => $this->faker->word,
            'function_nature' => $this->faker->sentence,
        ];
    }
}
