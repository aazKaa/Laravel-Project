<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;


class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nis' => fake()->randomNumber(5, true),
            'classroom_id' => Classroom::factory(),
            'address' => fake()->address()
        ];
    }
}
