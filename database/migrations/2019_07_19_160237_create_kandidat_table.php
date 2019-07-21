<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKandidatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->increments('id_kandidat',25);
            $table->string('nama_ketua',35);
            $table->string('nama_wakil',35);
            $table->integer('nomor_urut');
            $table->string('foto',100);
            $table->string('foto2',100);
            $table->integer('id_voting');
            $table->integer('id_partai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kandidat');
    }
}
