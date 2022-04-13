<?php

namespace Database\Seeders;

use App\Models\Allergen;
use Database\Factories\AllergenFactory;
use Illuminate\Database\Seeder;

class AllergenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Allergen::factory()->count(10)->create();
    }
}
