<?php

namespace Database\Factories;

use App\Models\santri;
use Illuminate\Database\Eloquent\Factories\Factory;

class SantriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Santri::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['M','F']),
            'tgl_lhr' => $this->faker->date(),
            'kota_lhr' => $this->faker->city(),
            'nama_ortu'=> $this->faker->name(),
            'alamat_ortu' => $this->faker->address(),
            'hp' => '+628'.mt_rand(1111111111,9999999999),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(8, 32),
            'tgl_masuk' => $this->faker->date(now()),
            'aktif' => $this->faker->boolean(),
            'created_at' => $this->faker->date(now()),
            'updated_at' => $this->faker->date(now()),
        ];
    }
}
