<?php

namespace Database\Factories;

use App\Models\Specialization;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
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
            'enroll_date' => fake()->date(),
            'student_id' => Student::inRandomOrder()->first()->id,
            'specialization_id' => Specialization::inRandomOrder()->first()->id,
        ];
    }
}
