<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'image' => 'https://via.placeholder.com/640x480.png/00ff00?text=Laravel',
                'description' => 'The PHP Framework For Web Artisans',
            ],
            [
                'name' => 'Vue.js',
                'slug' => 'vue-js',
                'image' => 'https://via.placeholder.com/640x480.png/0000ff?text=Vue.js',
                'description' => 'The Progressive JavaScript Framework',
            ],
            [
                'name' => 'Tailwind CSS',
                'slug' => 'tailwind-css',
                'image' => 'https://via.placeholder.com/640x480.png/ff0000?text=Tailwind+CSS',
                'description' => 'A utility-first CSS framework for rapid UI development',
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }

        Category::factory(10)->create();
    }
}
