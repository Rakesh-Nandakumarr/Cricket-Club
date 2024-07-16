<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // document factory
            'file_name' => $this->faker->name,
            'file_path' => 'files/01J2WDJYQZX7JMYNDTNCT1V4TZ.docx',
            'is_active' => true,
            'is_public' => true,
            'document_type' => $this->faker->randomElement([                            
                            'Objects & By-Laws',
                            'Minutes',
                            'Financial Reports',
                            'Executive Committee minutes',
                            'Miscellaneous Documents',]),
        ];
    }
}
