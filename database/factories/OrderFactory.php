<?php

namespace Database\Factories;

use App\Models\Discount;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'discount_id' => Discount::factory(),
            'purchase_date' => $this->faker->dateTime,
            'delivery_date' => $this->faker->dateTime,
            'in_progress' => $this->faker->boolean,
            'is_delivery' => $this->faker->boolean,
            'delivery_address' => $this->faker->address,
            'canceled' => $this->faker->boolean,
            'note' => $this->faker->numberBetween(1,5),
            'commentary' => $this->faker->paragraph,
        ];
    }
}
