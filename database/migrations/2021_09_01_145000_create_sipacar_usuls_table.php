<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSipacarUsulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sipacar_usuls', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('nama_peraturan');
            $table->string('nomor', 10)->default('0');
            $table->integer('tahun')->nullable();
            $table->integer('status')->default(0);
            $table->string('user_pengusul', 50);
            $table->text('response')->nullable()->default('Menunggu jawaban.');
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
        Schema::dropIfExists('sipacar_usuls');
    }
}
