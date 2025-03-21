<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::truncate(); // delete all from lessons table before seed data

        Course::each(function (Course $course) {
            collect()
                ->range(1, mt_rand(1, 20))
                ->each(function ($number) use ($course) {
                    Lesson::factory()->for($course)->create(['number' => $number]);
                });
        });
    }
}
