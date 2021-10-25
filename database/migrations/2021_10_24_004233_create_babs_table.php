<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabsTable extends Migration
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
<<<<<<< HEAD:database/migrations/2021_10_13_041222_create_bab.php
            $table->string('bab');
=======
            $table->foreignId('id_buku')->constrained('bukus');
            $table->string('bab',50);
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1:database/migrations/2021_10_24_004233_create_babs_table.php
            $table->string('judul',100);
            $table->text('keterangan');
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
        Schema::dropIfExists('babs');
    }
}
