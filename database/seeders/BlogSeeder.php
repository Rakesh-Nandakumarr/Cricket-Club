<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create blogs

                $blogs = [
            [
                'title' => 'Blog 1',
                'slug' => 'blog-1',
                'teaser_image' => '/photos/blog-1.jpg',
                'banner_image' => '/photos/blog-1-banner.jpg',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Nulla nec purus feugiat, molestie ipsum et, consequat nibh.',
                'is_published' => true,
                'publish_at' => now(),
                'keywords' => 'blog, blog 1',
            ],
            [
                'title' => 'Blog 2',
                'slug' => 'blog-2',
                'teaser_image' => '/photos/blog-2.jpg',
                'banner_image' => '/photos/blog-2-banner.jpg',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Nulla nec purus feugiat, molestie ipsum et, consequat nibh.',
                'is_published' => true,
                'publish_at' => now(),
                'keywords' => 'blog, blog 2',
            ],
            [
                'title' => 'Blog 3',
                'slug' => 'blog-3',
                'teaser_image' => '/photos/blog-3.jpg',
                'banner_image' => '/photos/blog-3-banner.jpg',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Nulla nec purus feugiat, molestie ipsum et, consequat nibh.',
                'is_published' => true,
                'publish_at' => now(),
                'keywords' => 'blog, blog 3',
            ],
        ];

        foreach ($blogs as $blog) {
            \App\Models\Blog::create($blog);
        }


        
    }
}
