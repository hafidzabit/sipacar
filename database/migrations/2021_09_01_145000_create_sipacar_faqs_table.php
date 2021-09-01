<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSipacarFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sipacar_faqs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('user_penanya', 50);
            $table->text('pertanyaan');
            $table->text('jawaban')->default('Belum ada jawaban');
            $table->integer('status')->default(0);
            $table->integer('hit')->default(0);
            $table->timestamp('timestamp_tanya')->useCurrent();
            $table->timestamp('timestamp_jawab')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sipacar_faqs');
    }
}
