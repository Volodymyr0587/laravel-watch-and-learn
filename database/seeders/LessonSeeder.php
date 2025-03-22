<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class LessonSeeder extends Seeder
{
    private array $data = [
        [
            'number' => 1,
            'title' => 'Intro & Setup',
            'length' => 2 * Carbon::SECONDS_PER_MINUTE + 41,
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 2,
            'title' => 'Auth Views, Routes & Controller',
            'length' => 30 * Carbon::SECONDS_PER_MINUTE + 19,
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 3,
            'title' => 'Register & Login Forms',
            'length' => 21 * Carbon::SECONDS_PER_MINUTE + 37,
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 4,
            'title' => 'Registering New User',
            'length' => 23 * Carbon::SECONDS_PER_MINUTE + 10,
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 5,
            'title' => 'Logging Users Out',
            'length' => 14 * Carbon::SECONDS_PER_MINUTE + 2,
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 6,
            'title' => 'Logging Users In',
            'length' => 3 * Carbon::SECONDS_PER_MINUTE + 43,
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 7,
            'title' => 'Accessing the Current User',
            'length' => 8 * Carbon::SECONDS_PER_MINUTE + 55,
            'url' => 'https://www.youtube.com/embed/LWcTqX6BmOg',
            'commit_url' => 'https://github.com/laravel/laravel/commit/e23c0c1bfddf6b01d2dd3b190de9a86b25bfe7c4',
        ],
        [
            'number' => 8,
            'title' => 'Protected Routes',
            'length' => 6 * Carbon::SECONDS_PER_MINUTE + 22,
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
