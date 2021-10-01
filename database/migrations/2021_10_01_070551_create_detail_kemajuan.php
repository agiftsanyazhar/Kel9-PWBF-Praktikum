<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKemajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kemajuan', function (Blueprint $table) {
            $table->id();
            $table->text('keterangan');
            $table->timestamps();
        });

        Schema::table('detail_kemajuan', function (Blueprint $table) {
            $table->foreignId('id_kemajuan')->constrained('kemajuan');
            $table->foreignId('id_bab')->constrained('bab');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_kemajuan');
    }
}
