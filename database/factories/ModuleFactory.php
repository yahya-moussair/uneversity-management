<?php

namespace Database\Factories;

use App\Models\Exam;
use App\Models\Specialization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description'=>fake()->text(),
            'exam_id' => Exam::inRandomOrder()->first()->id,
            'specialization_id' => Specialization::inRandomOrder()->first()->id,
        ];
    }
}