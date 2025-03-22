<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    private array $data = [
        [
            'title' => 'Laravel Authentication Tutorial',
            'description' => 'Development on Laravel',
            'repository_url' => 'https://github.com/laravel/laravel',
        ],
        [
            'title' => 'Builds with Vite',
            'description' => 'Let\'s explore the power of modern frontend framework',
            'repository_url' => 'https://github.com/vitejs/vite',
        ],
        [
            'title' => 'IdeaVim | Vim in JetBrains',
            'description' => 'Drastically Improve your productivity with IdeaVim',
            'repository_url' => 'https://github.com/JetBrains/ideavim',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::truncate(); // delete all from courses table before seed data

        Course::factory(50)
            ->sequence(fn (Sequence $sequence) => $this->data[$sequence->index] ?? [])
            ->create();
    }
}
