<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\santri;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        santri::factory(30)->create();
    }
}
