<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'credit_card' => $this->faker->creditCardNumber,
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'postal' => $this->faker->postcode,
            'address' => $this->faker->address,
        ];
    }
}
