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
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'phone_number' => $this->faker->phoneNumber,
            'mailing_address' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'province' => $this->faker->state,
            'postal_code' => $this->faker->postcode,
            'email' => $this->faker->unique()->safeEmail,
            'emergency_contact_name' => $this->faker->name,
            'emergency_contact_relationship' => $this->faker->word,
            'emergency_contact_phone' => $this->faker->phoneNumber,
            'emergency_contact_email' => $this->faker->safeEmail,
            'agm_package' => $this->faker->boolean,
            'consent' => $this->faker->boolean,
            'volunteer_activities' => json_encode($this->faker->words($nb = 3, $asText = false)),
            'other_activity' => $this->faker->word,
            'agreement' => $this->faker->boolean,
            'is_active' => $this->faker->boolean,
            'is_membership_paid' => $this->faker->boolean,
            'membership_paid_date' => $this->faker->date(),
        ];

    }
}
