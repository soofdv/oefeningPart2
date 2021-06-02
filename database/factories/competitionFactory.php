<?php

namespace Database\Factories;

use App\Models\competition;
use Illuminate\Database\Eloquent\Factories\Factory;

class competitionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = competition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->catchPhrase(),
            'description' => $this->faker->text(),
            'date' => $this->faker->dateTime(),
        ];
    }
}
