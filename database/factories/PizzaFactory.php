<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dough_type' => $this->faker->numberBetween(1, 3),
        ];
    }
}
