<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create sports
        $sports = [
            ['name' => 'Football', 'slug' => 'football', 'description' => 'The beautiful game'],
            ['name' => 'Basketball', 'slug' => 'basketball', 'description' => 'The fast game'],
            ['name' => 'Baseball', 'slug' => 'baseball', 'description' => 'The American pastime'],
        ];

        foreach ($sports as $sport) {
            \App\Models\Sport::create($sport);
        }
    }
}
