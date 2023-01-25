<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryContact>
 */
class CategoryContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slug' => fake()->slug(),
            'title' => fake()->company(),
            'desc' => fake()->paragraph(1),
            'user_id' => mt_rand(1,6),
            // 'category_id' => mt_rand(1,3)
        ];
    }
}
