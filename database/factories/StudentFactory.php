<?php

namespace Database\Factories;

use App\Models\Classe;
use App\Models\User;
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
            'registred_date' => fake()->date(),
            'abssence_reason' => fake()->paragraph(),
            'user_id' => User::inRandomOrder()->first()->id,
            'classe_id' => Classe::inRandomOrder()->first()->id
        ];
    }
}
