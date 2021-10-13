<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $santri = DB::table('santris')->get();

        return view('dashboard.tables', ['santris' => $santri]);
    }
}
