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
            'reference'=>'FR'.fake()->numberBetween(100000,999999),
            'name'=>fake()->words(5,true),
            'description'=>fake()->sentences(3,true),
            'supplier_id'=>1
        ];
    }
}
