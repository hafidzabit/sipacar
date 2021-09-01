<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuls', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('nama_peraturan');
            $table->string('nomor', 10);
            $table->year('tahun');
            $table->integer('status');
            $table->integer('user_pengusul');
            $table->text('response');
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuls');
    }
}
