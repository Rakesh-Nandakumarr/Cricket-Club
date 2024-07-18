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
            ['name' => 'Manchester United', 'slug' => 'manchester-united', 'description' => 'The Red Devils'],
            ['name' => 'barcelona', 'slug' => 'barcelona', 'description' => 'The Blaugrana'],
            ['name' => 'Real Madrid', 'slug' => 'real-madrid', 'description' => 'The Galacticos'],
            ['name' => 'Los Angeles Lakers', 'slug' => 'los-angeles-lakers', 'description' => 'The Purple and Gold'],
            ['name' => 'Chicago Bulls', 'slug' => 'chicago-bulls', 'description' => 'The Windy City'],
            ['name' => 'New York Yankees', 'slug' => 'new-york-yankees', 'description' => 'The Bronx Bombers'],
            ['name' => 'Boston Red Sox', 'slug' => 'boston-red-sox', 'description' => 'The BoSox'],
        ];

        foreach ($teams as $team) {
            \App\Models\CricketTeam::create($team);
        }
    }
}
