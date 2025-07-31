<?php

namespace Database\Factories;

use App\Models\Exam;
use App\Models\ExamQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExamQuestion>
 */
class ExamQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prompt' => fake()->text(10),
            'choices' => fake()->text(5),
            'exam_id' => Exam::inRandomOrder()->first()->id,
        ];
    }
}
