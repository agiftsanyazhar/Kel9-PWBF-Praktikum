<?php

namespace Database\Factories;

use App\Models\Kemajuan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KemajuanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kemajuan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal' => $this->faker->date(),
            'status' => $this->faker->randomElement(['N','T','M']),
            'id_santri'=>mt_rand(1,5),
            'id_pengurus' =>mt_rand(1,20)
        ];
    }
}
