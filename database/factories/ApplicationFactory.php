<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
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
            'slug' => Str::random(10),
            'image' =>  fake()->title(),
            'url' => fake()->title(),
            'description' => fake()->text($maxNbChars = 700),
        ];
    }
}
