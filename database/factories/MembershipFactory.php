<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MembershipFactory extends Factory
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
            'phone_number' => $this->faker->phoneNumber(),
            'mailing_address' => $this->faker->address(),
            'postal_code' => $this->faker->postcode(),
            'email' => $this->faker->unique()->safeEmail(),
            'is_active' => $this->faker->boolean(),
            'is_membership_paid' => $this->faker->boolean(),
            'membership_paid_date' => $this->faker->dateTimeThisYear(),
        ];
    }
}
