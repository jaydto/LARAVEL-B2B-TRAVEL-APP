<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccommodationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'standard_rack_rate' => $this->faker->randomFloat(2, 50, 200),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
