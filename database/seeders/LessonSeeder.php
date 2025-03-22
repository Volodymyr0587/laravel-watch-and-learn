<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    private array $data = [
        [
            'number' => 1,
            'title' => 'Intro & Setup',
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 2,
            'title' => 'Auth Views, Routes & Controller',
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 3,
            'title' => 'Register & Login Forms',
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 4,
            'title' => 'Registering New User',
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 5,
            'title' => 'Logging Users Out',
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 6,
            'title' => 'Logging Users In',
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 7,
            'title' => 'Accessing the Current User',
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 8,
            'title' => 'Protected Routes',
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::truncate(); // delete all from lessons table before seed data

        $courseTitle = 'Laravel Authentication Tutorial';

        Lesson::factory(count($this->data))
            ->for(Course::where('title', $courseTitle)->first())
            ->sequence(...$this->data)
            ->create();

        Course::whereNot('title', $courseTitle)
            ->each(function (Course $course) {
                collect()
                    ->range(1, mt_rand(1, 20))
                    ->each(function ($number) use ($course) {
                        Lesson::factory()->for($course)->create(['number' => $number]);
                    });
            });
    }
}
