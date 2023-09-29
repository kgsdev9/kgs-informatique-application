<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
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
            'view' => 1,
            'slug' => fake()->text($maxNbChars = 200),
            'description' => fake()->paragraph($nbSentences= 3, true),
            'image' => fake()->title(),
            'categoryarticle_id' => rand(1,13),
            'user_id' => rand(1,10),
        ];
    }
}
