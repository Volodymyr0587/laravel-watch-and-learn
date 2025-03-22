<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(rand(2, 6), true),
            'description' => $this->faker->text(),
            'length' => "{$this->faker->numberBetween(1, 15)}h {$this->faker->numberBetween(1, 59)}min",
            'repository_url' => $this->faker->url,
        ];
    }
}
