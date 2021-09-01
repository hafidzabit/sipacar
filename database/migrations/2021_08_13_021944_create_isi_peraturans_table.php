<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsiPeraturansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_peraturans', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('info_id');
            $table->string('bab', 10);
            $table->string('pasal', 10);
            $table->string('ayat', 10);
            $table->string('poin', 10);
            $table->text('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('isi_peraturans');
    }
}
