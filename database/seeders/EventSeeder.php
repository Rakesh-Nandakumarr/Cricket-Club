<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // create events

            $events = [
            [
                'title' => 'Event 1',
                'slug' => 'event-1',
                'description' => 'Event 1 description',
                'start_date' => now(),
                'end_date' => now()->addDays(1),
                'keywords' => 'event 1, event',
            ],
            [
                'title' => 'Event 2',
                'slug' => 'event-2',
                'description' => 'Event 2 description',
                'start_date' => now()->addDays(2),
                'end_date' => now()->addDays(3),
                'keywords' => 'event 2, event',
            ],
            [
                'title' => 'Event 3',
                'slug' => 'event-3',
                'description' => 'Event 3 description',
                'start_date' => now()->addDays(4),
                'end_date' => now()->addDays(5),
                'keywords' => 'event 3, event',
            ],
        ];

        foreach ($events as $event) {
            \App\Models\Event::create($event);
        }
    }
}
