<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPeran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_peran', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('detail_peran', function (Blueprint $table) {
            $table->foreignId('id_peran')->constrained('peran');
            $table->foreignId('id_pengurus')->constrained('pengurus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_perans');
    }
}
