<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKpuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpu', function (Blueprint $table) {
            $table->increments('id_kpu',25);
            $table->string('no_id_kpu',18);
            $table->string('nama',150);
            $table->integer('id_divisi_kpu');
            $table->integer('id_login');
            $table->dateTime('waktu_buat');
            $table->dateTime('waktu_update');
            $table->string('id_user',11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kpu');
    }
}
