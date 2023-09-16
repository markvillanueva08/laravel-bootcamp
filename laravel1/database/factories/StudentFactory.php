<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElements(['male', 'female']);
        return [
            'first_name' => fake()->firstName($gender),
            'last_name' => fake()->lastName(),
            'gender' => $gender,
            'age' => fake()->numberBetween( $min = 18, $max = 22 ),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
