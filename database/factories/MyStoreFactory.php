<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MyStore>
 */
class MyStoreFactory extends Factory
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
            'name' => 'Sumber Jaya',
            'phone' => '08677554466',
            'desc' => fake()->paragraph(1),
            'img' => 'avatar1.png',
            'transaction_id' => 1,
            'user_id' => 1,

        ];
    }
}
