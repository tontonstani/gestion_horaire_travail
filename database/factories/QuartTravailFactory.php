<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuartTravail>
 */
class QuartTravailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'debut_quart' => fake()->dateTimeThisYear(),
            'fin_quart' => fake()->dateTimeThisYear(),
            'id_employe' => fake()->randomNumber(),
        ];
    }
}
