<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'reduction_value' => $this->faker->biasedNumberBetween(0, 100),
            'start_date' => $this->faker->dateTime,
            'end_date' => $this->faker->dateTime,
        ];
    }
}
