<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKemajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kemajuan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->char('status',1);
            $table->timestamps();
        });

        Schema::table('kemajuan', function (Blueprint $table) {
            $table->foreignId('id_santri')->constrained('santris');
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
        Schema::dropIfExists('kemajuan');
    }
}
