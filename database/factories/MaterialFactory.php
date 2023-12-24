<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $generateTitle = fake()->unique()->sentence(3);

        return [
            'title' =>  rtrim($generateTitle, "."),
            'description' => fake()->paragraph(3),
            'link_embed' => "https://www.iana.org/help/example-domains",
            'course_id' => Course::all()->random()->id,
        ];
    }
}
