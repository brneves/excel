<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfoMascTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfo_masc', function (Blueprint $table) {
            $table->id('id_inscricoes');
            $table->string('nome');
            $table->string('cpf');
            $table->integer('id_vagas_eventos');
            $table->integer('id_vagas_eventos_final');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfo_masc');
    }
}
