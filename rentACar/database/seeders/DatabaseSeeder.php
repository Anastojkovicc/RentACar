<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AutoSeeder;
use Database\Seeders\RentiranjeSeeder;

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

       $r = new RentiranjeSeeder();
       $r -> run();

  
    }
}
