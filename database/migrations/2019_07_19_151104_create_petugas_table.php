<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->increments('id_petugas',25);
            $table->string('no_petugas',100);
            $table->integer('no_ktp');
            $table->integer('id_divisi_petugas');
            $table->integer('id_tps');
            $table->integer('id_login');
            $table->dateTime('waktu_buat');
            $table->string('id_user',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
