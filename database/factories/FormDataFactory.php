<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormData>
 */
class FormDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'fathername' => $this->faker->firstName('male'),
            'mothername' => $this->faker->firstName('female'),
            'brothername' => $this->faker->firstName('male'),
            'sistername' => $this->faker->firstName('female'),
            'about' => $this->faker->sentence(10),
            'dob' => $this->faker->date(),
        ];
    }
}
