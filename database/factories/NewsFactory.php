<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(4, true),
            'subtitle' => fake()->words(3, true),
            'summary' => fake()->realTextBetween(500, 600),
            'content' => fake()->realTextBetween(1500, 2500),
            'author' => fake()->name()
        ];
    }
}
