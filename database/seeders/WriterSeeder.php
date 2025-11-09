<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $writers = [
            [
                'name' => 'Jean Philippe Mateta',
                'specialist' => 'Data Science Specialist',
                'image' => 'https://randomuser.me/api/portraits/men/1.jpg'
            ],
            [
                'name' => 'Jane Doe Utada',
                'specialist' => 'Network Security Specialist',
                'image' => 'https://randomuser.me/api/portraits/women/2.jpg'
            ],
            [
                'name' => 'Kevin Parker Impala',
                'specialist' => 'Interactive Multimedia Specialist',
                'image' => 'https://randomuser.me/api/portraits/men/3.jpg'
            ],
        ];

        foreach ($writers as $writer) {
            Writer::create($writer);
        }
    }
}
