<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSipacarInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sipacar_infos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('jenis')->default('Peraturan');
            $table->string('nama');
            $table->string('nomor', 5);
            $table->year('tahun');
            $table->date('tanggal_terbit');
            $table->text('url');
            $table->string('instansi_penerbit');
            $table->integer('user_upload');
            $table->integer('hit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sipacar_infos');
    }
}
