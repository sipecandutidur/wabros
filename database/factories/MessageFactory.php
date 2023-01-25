<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message::class>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slug'=> fake()->slug(),
            // 'title' => fake()->company(),
            'subject' => fake()->word(),
            'sender' => 1,
            'reciver' => fake()->phoneNumber(),
            'body' => fake()->paragraph(),
            'user_id' => 1
        ];
    }
}
