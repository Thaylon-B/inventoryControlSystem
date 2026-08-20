<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
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
            'category_id'=> Category::factory(),
            'name' => fake()->words(2,true),
            'price'=> fake()->random()->unique(2,2,100),
            'quantity'=> fake()->numberBetween(0,50),
        ];
    }
}
