<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AutoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $s= new AutoSeeder();
       $s -> run();
    }
}
