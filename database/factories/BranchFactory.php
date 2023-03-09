<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => fake()->company(),
            "address" => fake()->address(),
            "name" => fake()->firstName(),
            "surname" => fake()->lastName(),
            "phone" => fake()->e164PhoneNumber(),
            "email" => fake()->safeEmail(),
            "tax_department" => fake()->state(),
            "tax_number" => fake()->randomNumber(7, true),
            "balance" => fake()->randomNumber(5, false),
            "ppn" => 1
        ];
    }
}
