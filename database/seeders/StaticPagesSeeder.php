<?php

namespace Database\Seeders;

use App\Models\StaticPage;
use Illuminate\Database\Seeder;

class StaticPagesSeeder extends Seeder
{
    public function run()
    {
        // Seed 'About Us'
        StaticPage::create([
            'title' => 'About Us',
            'slug' => 'about-us',
            'is_active' => true,
            'content' => [
                [
                    'type' => 'heading',
                    'data' => [
                        'content' => 'About Us',
                        'level' => 'h1',
                    ],
                ],
                [
                    'type' => 'paragraph',
                    'data' => [
                        'content' => 'This is the content for About Us.',
                    ],
                ],
            ],
        ]);

        // Seed 'Terms & Conditions'
        StaticPage::create([
            'title' => 'Terms & Conditions',
            'slug' => 'terms-conditions',
            'is_active' => true,
            'content' => [
                [
                    'type' => 'heading',
                    'data' => [
                        'content' => 'Terms & Conditions',
                        'level' => 'h1',
                    ],
                ],
                [
                    'type' => 'paragraph',
                    'data' => [
                        'content' => 'This is the content for Terms & Conditions.',
                    ],
                ],
            ],
        ]);

        // Seed 'Policies'
        StaticPage::create([
            'title' => 'Policies',
            'slug' => 'policies',
            'is_active' => true,
            'content' => [
                [
                    'type' => 'heading',
                    'data' => [
                        'content' => 'Policies',
                        'level' => 'h1',
                    ],
                ],
                [
                    'type' => 'paragraph',
                    'data' => [
                        'content' => 'This is the content for Policies.',
                    ],
                ],
            ],
        ]);
    }
}
