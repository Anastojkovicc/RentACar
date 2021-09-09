<?php

namespace Database\Factories;

use App\Models\Rentiranje;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class RentiranjeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rentiranje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Ime'=>$this->faker->firstName($gender=null),
            'Prezime'=>$this->faker->lastname(),
            'Auto' => 9
        ];
    }
}
