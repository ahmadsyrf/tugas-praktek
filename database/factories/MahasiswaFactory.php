<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nim' => fake()->numerify('##########'),
            'nama' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'prodi' => 'Teknik Informatika',
            'semester' => fake()->numberBetween(1, 8),
        ];
    }
}