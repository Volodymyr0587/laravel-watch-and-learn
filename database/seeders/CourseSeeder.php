<?php

namespace Database\Seeders;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::truncate(); // delete all from courses table before seed data

        collect()->range(1, 10)->each(function (int $i) {
            // Generate random hours (0 to 12) and minutes (0 to 59)
            $hours = rand(0, 12);
            $minutes = rand(0, 59);

            // Format the duration string dynamically
            $length = trim(($hours ? "{$hours}h " : '') . ($minutes ? "{$minutes}min" : ''));

            Course::create([
                'title' => "Course $i",
                'description' => fake()->sentence(8),
                'lessons_count' => rand(1, 50),
                'length' => $length,
                'created_at' => Carbon::now()->subSeconds(rand(1, 600)), // Random past timestamp
                'updated_at' => Carbon::now()->subSeconds(rand(1, 600)),
            ]);
        });

    }
}
