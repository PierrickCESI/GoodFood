<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrimmingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'trimming_type' => $this->faker->name,
            'quantity' => $this->faker->randomDigit(),
        ];
    }
}
