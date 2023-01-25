<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductPackages>
 */
class ProductPackagesFactory extends Factory
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
            'title' => fake()->name(),
            'limit_message' => mt_rand(50,1000),
            'limit_contact' => mt_rand(20,100),
            'limit_phone' => mt_rand(50, 100),
            'life_time' => mt_rand(10,50),
            'price' => mt_rand(20000, 50000),
            'transaction_id' => 1,
            'user_id' => 1,
        ];
    }
}
