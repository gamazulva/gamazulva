<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisi', function (Blueprint $table) {
            $table->increments('id_divisi',3);
            $table->string('nama_divisi',100);
            $table->string('segmen',15);
            $table->text('keterangan');
            $table->dateTime('waktu_buat');
            $table->dateTime('waktu_update');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisi');
    }
}
