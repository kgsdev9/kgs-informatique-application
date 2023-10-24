<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TopicSeederFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text($maxNbChars = 200),
            'slug' => fake()->text($maxNbChars = 200),
            'description' => fake()->paragraph($nbSentences= 3, true),
            'image' => fake()->title(),
            'user_id' => 1,
        ];
    }
}
