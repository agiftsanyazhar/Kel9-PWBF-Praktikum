<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->id();
            $table->string('nama_santri');
            $table->boolean('gender');
            $table->date('tgl_lhr');
            $table->string('kota_lhr',40);
            $table->string('nama_ortu',50);
            $table->string('alamatortu',100);
            $table->string('hp',15);
            $table->string('email',30);
            $table->date('tgl_msk');
            $table->boolean('aktif');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('santri');
    }
}