<?php

namespace Database\Seeders;

use App\Models\Allergen;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AllergenSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(DiscountSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(PizzaSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PurchaseSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(TrimmingSeeder::class);
        $this->call(UserSeeder::class);
    }
}
