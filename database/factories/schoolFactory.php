<?php

namespace Database\Factories;

use App\Models\school;
use Illuminate\Database\Eloquent\Factories\Factory;

class schoolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = school::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'competition_id' => $this->faker->numberBetween(1, 2),
            'name' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
        ];
    }
}
