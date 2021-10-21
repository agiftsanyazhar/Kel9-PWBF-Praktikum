<?php

namespace Database\Factories;

use App\Models\Detail_Peran;
use Illuminate\Database\Eloquent\Factories\Factory;

class Detail_PeranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detail_Peran::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_pengurus' => mt_rand(1,5),
            'id_peran' => mt_rand(1,20)
        ];
    }
}
