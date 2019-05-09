<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_jurusan')->unsigned();
            $table->integer('id_kelas')->unsigned();
            $table->string('nama');
            $table->integer('NIS');
            $table->integer('NISN');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('foto');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('ayah');
            $table->string('ibu');
            $table->integer('no_telepon');
            $table->integer('id_user')->unsigned();
            $table->timestamps();


            $table->foreign('id_jurusan')->references('id')->on('jurusan');
            $table->foreign('id_kelas')->references('id')->on('kelas');
            $table->foreign('id_user')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
