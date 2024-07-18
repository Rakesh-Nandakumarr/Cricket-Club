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
        // for cricket, create teams with name, slug, and description
        $teams = [
                    ['name' => 'Ireland', 'slug' => 'ireland', 'description' => 'Known for their spirited performances in international cricket.'],
                    ['name' => 'Scotland', 'slug' => 'scotland', 'description' => 'A team with a rich history in the ICC Intercontinental Cup.'],
                    ['name' => 'Netherlands', 'slug' => 'netherlands', 'description' => 'Famous for upsetting major teams in World Cup tournaments.'],
                    ['name' => 'UAE', 'slug' => 'uae', 'description' => 'A competitive side in the Asia Cup and ICC World Twenty20.'],
                    ['name' => 'Nepal', 'slug' => 'nepal', 'description' => 'Rising stars in the cricket world with a passionate fanbase.'],
                    ['name' => 'Oman', 'slug' => 'oman', 'description' => 'Known for their rapid rise in international cricket.'],
                    ['name' => 'Hong Kong', 'slug' => 'hong-kong', 'description' => 'A team that has shown promise in the Asia Cup.'],
                    ['name' => 'Canada', 'slug' => 'canada', 'description' => 'Participated in multiple Cricket World Cups with memorable performances.'],
                    ['name' => 'Namibia', 'slug' => 'namibia', 'description' => 'A strong contender in the ICC World Cricket League.'],
                    ['name' => 'Kenya', 'slug' => 'kenya', 'description' => 'Reached the semi-finals in the 2003 Cricket World Cup.'],
                    ['name' => 'Uganda', 'slug' => 'uganda', 'description' => 'An emerging cricketing nation with potential.'],
                    ['name' => 'Bermuda', 'slug' => 'bermuda', 'description' => 'Known for their appearance in the 2007 Cricket World Cup.'],
                    ['name' => 'USA', 'slug' => 'usa', 'description' => 'A historic cricket nation experiencing a resurgence.'],
                    ['name' => 'PNG', 'slug' => 'png', 'description' => 'Papua New Guinea has a strong presence in the ICC Intercontinental Cup.'],
                    ['name' => 'Jersey', 'slug' => 'jersey', 'description' => 'Competes in ICC World Cricket League and European Cricket Championship.'],
                    ['name' => 'Italy', 'slug' => 'italy', 'description' => 'Known for competing in the European Cricket Championship.'],
                    ['name' => 'Germany', 'slug' => 'germany', 'description' => 'A growing cricket team in Europe with a diverse squad.'],
                    ['name' => 'Denmark', 'slug' => 'denmark', 'description' => 'Has a long history in cricket, competing since the 19th century.'],
                    ['name' => 'Norway', 'slug' => 'norway', 'description' => 'An emerging team in European cricket with a focus on development.'],
        ];


        foreach ($teams as $team) {
            \App\Models\CricketTeam::create($team);
        }
    }
}
