<?php

namespace Database\Factories;

use App\Models\player;
use Illuminate\Database\Eloquent\Factories\Factory;

class playerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'school_id' => $this->faker->numberBetween(1,3),
            'name' => $this->faker->name(),
        ];
    }
}
