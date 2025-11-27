<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
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
        return [
            //
            'fullname' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'date_of_birth' => $this->faker->date(),
            'department' => $this->faker->randomElement(['software', 'chemical', 'civil', 'medicine', 'statistics']),

        ];
    }
}
