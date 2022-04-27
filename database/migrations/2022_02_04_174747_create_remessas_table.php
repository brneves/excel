<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemessasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remessas', function (Blueprint $table) {
            $table->id('id_remessas');
            $table->string('arquivo');
            $table->dateTime('data');
            $table->integer('qtd_registros');
            $table->double('valor_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remessas');
    }
}
