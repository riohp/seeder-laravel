<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'name' => Str::random(25), 
            'slug' => Str::random(25),
            'description' => fake()->paragraph(3),
            'price' => fake()->numberBetween(1, 125),
            'stock' => fake()->numberBetween(1, 125),
        ];
            
    }
}
