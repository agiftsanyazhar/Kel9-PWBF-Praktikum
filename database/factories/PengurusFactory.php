<?php

namespace Database\Factories;

use App\Models\Pengurus;
use Illuminate\Database\Eloquent\Factories\Factory;

class PengurusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pengurus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'hp' => '+628'.mt_rand(1111111111,9999999999),
            'gender' => $this->faker->randomElement(['M','F']),
            'password' => $this->faker->password(8, 10),
            'aktif' => $this->faker->boolean()
        ];
    }
}
