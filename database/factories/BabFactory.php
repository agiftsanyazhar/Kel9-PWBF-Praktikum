<?php

namespace Database\Factories;

use App\Models\Bab;
use Illuminate\Database\Eloquent\Factories\Factory;

class BabFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bab::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bab'=> $this->faker->sentence(3),
            'judul' => $this->faker->sentence(5),
            'keterangan' => $this->faker->sentence(10),
            'id_buku' => mt_rand(1,10)

        ];
    }
}
