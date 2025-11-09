<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Data Science', 'slug' => 'data-science'],
            ['name' => 'Network Security', 'slug' => 'network-security'],
            ['name' => 'Interactive Multimedia', 'slug' => 'interactive-multimedia'],
            ['name' => 'Software Engineering', 'slug' => 'software-engineering'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
