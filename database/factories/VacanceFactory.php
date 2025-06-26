<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacance>
 */
class VacanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'debut_vacance' => fake()->date('Y-m-d'),
            'fin_vacance' => fake()->date('Y-m-d'),
            'id_employe' => fake()->randomNumber(),
        ];
    }
}
