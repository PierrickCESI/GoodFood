<?php

namespace Database\Seeders;

use App\Models\Trimming;
use Illuminate\Database\Seeder;

class TrimmingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trimming::factory()->count(75)->create();
    }
}
