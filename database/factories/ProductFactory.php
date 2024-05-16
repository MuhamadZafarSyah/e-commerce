<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->sentence(mt_rand(2, 4)),
            'description' => collect(fake()->paragraphs(mt_rand(5, 10)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'price' => now(),
            'stock' => mt_rand(1, 10),
            'image' => fake()->sentence(mt_rand(2, 4)),
            'id_category' => mt_rand(1, 3),
            'discount' => mt_rand(1, 100),
        ];
    }
}
