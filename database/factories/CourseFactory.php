<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\course>
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
        $titles = ['Git', 'Haskell', 'HTML5', 'Java', 'JavaScript', 'Kotlin', 'MongoDB', 'MySQL', 'PHP', 'PostgreSQL', 'Python', 'ReactJS', 'Ruby'];
        $selectedTitle = fake()->unique()->randomElement($titles);

        return [
            'title' =>  $selectedTitle,
            'slug' =>  Str::slug($selectedTitle),
            'description' => fake()->paragraph(3),
            'duration' => fake()->randomDigitNotNull(),
        ];
    }
}
