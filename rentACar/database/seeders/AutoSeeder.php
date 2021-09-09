<?php

namespace Database\Seeders;

use App\Models\Auto;
use Illuminate\Database\Seeder;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auto::factory()->count(5)->create();
    }
}
