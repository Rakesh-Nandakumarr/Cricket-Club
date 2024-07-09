<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommitteesFactory extends Factory
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
            'year' => $this->faker->year,
            'position' => $this->faker->word,
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'is_active' => $this->faker->boolean,
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
        
        ];
    }
}
