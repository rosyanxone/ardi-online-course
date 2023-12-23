<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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

        return [
            'title' =>  fake()->unique()->randomElement($titles),
            'description' => fake()->paragraph(1),
            'duration' => fake()->randomDigitNotNull(),
        ];
    }
}
