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
        ],
        [
            'number' => 2,
            'title' => 'Auth Views, Routes & Controller',
        ],
        [
            'number' => 3,
            'title' => 'Register & Login Forms',
        ],
        [
            'number' => 4,
            'title' => 'Registering New User',
        ],
        [
            'number' => 5,
            'title' => 'Logging Users Out'
        ],
        [
            'number' => 6,
            'title' => 'Logging Users In'
        ],
        [
            'number' => 7,
            'title' => 'Accessing the Current User'
        ],
        [
            'number' => 8,
            'title' => 'Protected Routes'
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
