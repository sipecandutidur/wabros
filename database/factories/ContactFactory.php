<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
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
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'category_contact_id' => 1,
            'user_id' => mt_rand(1,6)
        ];
    }
}
