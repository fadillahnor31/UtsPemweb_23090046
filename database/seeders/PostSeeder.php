<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Hello World',
                'content' => 'This is the first post on our blog.',
                'user_id' => 1,
                'category_id' => 1,
                'slug' => 'hello-world',
                'image' => 'https://via.placeholder.com/640x480.png/00ff00?text=Hello+World',
                'is_published' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Hello Laravel',
                'content' => 'This is the second post on our blog.',
                'user_id' => 1,
                'category_id' => 1,
                'slug' => 'hello-laravel',
                'image' => 'https://via.placeholder.com/640x480.png/0000ff?text=Hello+Laravel',
                'is_published' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Hello Vue.js',
                'content' => 'This is the third post on our blog.',
                'user_id' => 1,
                'category_id' => 2,
                'slug' => 'hello-vue-js',
                'image' => 'https://via.placeholder.com/640x480.png/ff0000?text=Hello+Vue.js',
                'is_published' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Hello Tailwind CSS',
                'content' => 'This is the fourth post on our blog.',
                'user_id' => 1,
                'category_id' => 3,
                'slug' => 'hello-tailwind-css',
                'image' => 'https://via.placeholder.com/640x480.png/ffff00?text=Hello+Tailwind+CSS',
                'is_published' => true,
                'published_at' => now(),
            ],
        ];

        foreach ($posts as $post) {
            \App\Models\Post::create($post);
        }

        Post::factory(10)->create([
            'user_id' => 1,
            'category_id' => 1,
        ]);
    }
}
