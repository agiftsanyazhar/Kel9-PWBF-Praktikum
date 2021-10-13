<?php

namespace Database\Factories;

use App\Models\Peran;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Peran::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'peran' => $this->faker->unique()->word(),
            'aktif' => $this->faker->boolean()
        ];
    }
}
