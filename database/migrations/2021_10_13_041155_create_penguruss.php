<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenguruss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penguruss', function (Blueprint $table) {
            $table->id();
            $table->string('nama',20);
            $table->string('email',30);
            $table->string('hp',15);
            $table->char('gender',1);
            $table->string('password',32);
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
        Schema::dropIfExists('penguruss');
    }
}
