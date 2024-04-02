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
        $x = fake()->randomLetter();
        $y = fake()->numberBetween(1,9);
        return [
            'reference'=>'FR'.fake()->numberBetween(100000,999999),
            'name'=>fake()->words(5,true),
            'description'=>fake()->sentences(3,true),
            'quantity'=>fake()->numberBetween(0,15),
            'supplier_id'=>1,
            'storage_id'=>1,
            'position'=>$x.$y,
            'price'=>fake()->randomFloat(2,5,200),
        ];
    }
}
