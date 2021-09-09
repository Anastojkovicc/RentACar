<?php

namespace Database\Seeders;

use App\Models\Rentiranje;
use Illuminate\Database\Seeder;

class RentiranjeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rentiranje::factory()->count(3)->create();
    }
}
