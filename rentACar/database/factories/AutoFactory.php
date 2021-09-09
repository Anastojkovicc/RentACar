<?php

namespace Database\Factories;

use App\Models\Auto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Auto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Marka'=>$this->faker->firstName($gender=null),
            'Model'=>$this->faker->firstName($gender=null),
            'Godiste'=>$this->faker->numberBetween($min = 1990, $max = 2021),
            'CenaPoDanu'=>$this->faker->numberBetween($min = 1000, $max = 9000)
        ];
    }
}
