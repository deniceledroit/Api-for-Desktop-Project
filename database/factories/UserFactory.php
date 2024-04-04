<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $lastName=fake()->lastname();
        $firstName=fake()->firstName();
        return [
            'name' => $firstName." ".$lastName,
            'email' => strtolower($lastName."_".$firstName[0]."@bg-airsoft.fr"),
            'password' => static::$password ??= Hash::make('password'),
            'streetAddress' => fake()->streetAddress(),
            'city' => fake()->city(),
            'postalCode' => fake()->postcode(),
            'phone' => fake()->phoneNumber(),
            'storage_id'=>1,
            'role_id'=>fake()->numberBetween(1,2),
            'remember_token' => Str::random(10)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
