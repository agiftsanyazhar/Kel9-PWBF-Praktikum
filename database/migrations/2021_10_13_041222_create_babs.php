<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('babs', function (Blueprint $table) {
            $table->id();
            $table->string('bab',50);
            $table->string('judul',100);
            $table->text('keterangan');
            $table->timestamps();
        });

        Schema::table('babs', function (Blueprint $table) {
            $table->foreignId('id_buku')->constrained('bukus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('babs');
    }
}
