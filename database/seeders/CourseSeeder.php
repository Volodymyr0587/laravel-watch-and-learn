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
            'title' => 'Vue Composition API From Scratch',
            'description' => 'Project development on Vue Composition API',
            'length' => '16h 20m',
        ],
        [
            'title' => 'Builds with Vite',
            'description' => 'Let\'s explore the power of modern frontend framework',
            'length' => '3h 49m',
        ],
        [
            'title' => 'IdeaVim | Vim in JetBrains',
            'description' => 'Drastically Improve your productivity with IdeaVim',
            'length' => '1h 20m',
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
