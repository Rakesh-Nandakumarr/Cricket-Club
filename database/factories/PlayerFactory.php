<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'jersey_number' => $this->faker->numberBetween(1, 99),
            'cricket_team_id' => $this->faker->numberBetween(1, 7),
            'player_role' => $this->faker->randomElement(['batsman', 'bowler', 'all-rounder', 'wicket-keeper']),
            'batting_style' => $this->faker->randomElement(['left-hand', 'right-hand']),
            'bowling_style' => $this->faker->randomElement(['left-arm', 'right-arm']),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
