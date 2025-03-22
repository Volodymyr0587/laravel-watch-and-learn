<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => Course::inRandomOrder()->first(),
            'number' => 1,
            'title' => ucfirst(fake()->words(mt_rand(2, 6), true)),
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ];
    }
}
