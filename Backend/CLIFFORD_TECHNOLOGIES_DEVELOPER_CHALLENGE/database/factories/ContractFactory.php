<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'accommodation_id' => function () {
                return \App\Models\Accommodation::factory()->create()->id;
            },
            'travel_agent_id' => function () {
                return \App\Models\TravelAgent::factory()->create()->id;
            },
            'contract_rates' => $this->faker->randomFloat(2, 100, 500),
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
