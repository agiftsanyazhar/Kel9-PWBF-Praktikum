<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKemajuans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kemajuans', function (Blueprint $table) {
            $table->id();
            $table->text('keterangan');
            $table->timestamps();
        });

        Schema::table('detail_kemajuans', function (Blueprint $table) {
            $table->foreignId('id_kemajuan')->constrained('kemajuans');
            $table->foreignId('id_bab')->constrained('babs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_kemajuans');
    }
}
