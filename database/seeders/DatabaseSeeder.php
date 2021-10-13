<?php

namespace Database\Seeders;

use App\Models\Bab;
use App\Models\Buku;
use App\Models\Detail_Kemajuan;
use App\Models\Detail_Peran;
use App\Models\Kemajuan;
use Illuminate\Database\Seeder;
use App\Models\santri;
use App\Models\pengurus;
use App\Models\Peran;

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
        santri::factory(50)->create();
        pengurus::factory(20)->create();
        Buku::factory(10)->create();
        Bab::factory(20)->create();
        Peran::factory(20)->create();
        Kemajuan::factory(50)->create();
        Detail_Peran::factory(30)->create();
        Detail_Kemajuan::factory(50)->create();
    }
}
