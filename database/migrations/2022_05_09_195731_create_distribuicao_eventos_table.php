<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribuicaoEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuicao_eventos', function (Blueprint $table) {
            $table->id('id_distribuicao_eventos');
            $table->integer('id_salas_setores');
            $table->integer('id_tipos_distribuicao');
            $table->integer('id_inscricoes');
            $table->integer('id_local_prova');
            $table->string('controle');
            $table->string('sequencia_prova');
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
        Schema::dropIfExists('distribuicao_eventos');
    }
}
