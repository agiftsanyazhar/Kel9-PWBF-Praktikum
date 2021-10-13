<?php

namespace Database\Factories;

use App\Models\santri;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class SantriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = santri::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_santri' => $this->faker->name(),
            'gender' => mt_rand(0,1),
            'tgl_lhr' => $this->faker->date(),
            'kota_lhr' => $this->faker->city(),
            'nama_ortu'=> $this->faker->name(),
            'alamat_ortu' => $this->faker->city(),
            'hp' => '+628'.mt_rand(1111111111,9999999999),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(8, 10),
            'tgl_masuk' => $this->faker->date(),
            'aktif' => $this->faker->boolean()
        ];
    }
}
