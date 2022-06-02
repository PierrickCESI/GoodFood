<?php

namespace Database\Factories;

use App\Models\Pizza;
use App\Models\Restaurant;
use App\Models\Trimming;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'restaurant_id' => Restaurant::factory(),
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 0.25),
            'energy_kj' => $this->faker->randomFloat(2),
            'energy_kcal' => $this->faker->randomFloat(2),
            'fat' => $this->faker->randomFloat(2),
            'saturated_fatty_acids' => $this->faker->randomFloat(2),
            'carbs' => $this->faker->randomFloat(2),
            'fiber' => $this->faker->randomFloat(2),
            'protein' => $this->faker->randomFloat(2),
            'salt' => $this->faker->randomFloat(2),
            'typable_id' => $this->faker->randomElement([
                Pizza::class,
                Trimming::class,
            ])::factory(),
            'typable_type' => $this->faker->randomElement([
                Pizza::class,
                Trimming::class,
            ]),
        ];
    }
}
