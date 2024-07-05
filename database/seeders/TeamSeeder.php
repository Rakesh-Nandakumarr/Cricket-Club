<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for each sport, create teams
        $teams = [
            ['name' => 'Manchester United', 'slug' => 'manchester-united', 'description' => 'The Red Devils', 'sport_id' => 1],
            ['name' => 'barcelona', 'slug' => 'barcelona', 'description' => 'The Blaugrana', 'sport_id' => 1],
            ['name' => 'Real Madrid', 'slug' => 'real-madrid', 'description' => 'The Galacticos', 'sport_id' => 1],
            ['name' => 'Los Angeles Lakers', 'slug' => 'los-angeles-lakers', 'description' => 'The Purple and Gold', 'sport_id' => 2],
            ['name' => 'Chicago Bulls', 'slug' => 'chicago-bulls', 'description' => 'The Windy City', 'sport_id' => 2],
            ['name' => 'New York Yankees', 'slug' => 'new-york-yankees', 'description' => 'The Bronx Bombers', 'sport_id' => 3],
            ['name' => 'Boston Red Sox', 'slug' => 'boston-red-sox', 'description' => 'The BoSox', 'sport_id' => 3],
        ];

        foreach ($teams as $team) {
            \App\Models\Team::create($team);
        }
    }
}
