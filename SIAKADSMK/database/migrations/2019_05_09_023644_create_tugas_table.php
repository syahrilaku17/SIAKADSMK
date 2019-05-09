<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_guru')->unsigned();
            $table->integer('id_kelas')->unsigned();
            $table->integer('id_mapel')->unsigned();
            $table->string('tugas');
            $table->string('file');
            $table->timestamps();

            $table->foreign('id_guru')->references('id')->on('guru');
            $table->foreign('id_kelas')->references('id')->on('kelas');
            $table->foreign('id_mapel')->references('id')->on('mata_pelajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas');
    }
}
