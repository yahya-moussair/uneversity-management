<?php

namespace Database\Factories;

use App\Models\Specialization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'speciality' => fake()-> name(),
            'phone'=>fake()->phoneNumber(),
            'email'=>fake()->email(),
            'password'=>fake()->password(),
            'specialization_id'=>Specialization::inRandomOrder()->first()->id,
        ];
    }
}
