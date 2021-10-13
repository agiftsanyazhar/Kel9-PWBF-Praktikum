<?php

namespace Database\Factories;

use App\Models\Detail_Kemajuan;
use Illuminate\Database\Eloquent\Factories\Factory;

class Detail_KemajuanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detail_Kemajuan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'keterangan' => $this->faker->sentence(10),
            'id_kemajuan' => mt_rand(1,50),
            'id_bab' => mt_rand(1,20)
        ];
    }
}
