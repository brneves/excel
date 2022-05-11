<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribuicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuicoes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_eventos');
            $table->integer('id_tipos_distribuicoes');
            $table->integer('id_setores');
            $table->string('controle');
            $table->integer('local_prova');
            $table->integer('colegio_prova');
            $table->integer('sala_prova');
            $table->string('sequencia_prova');
            $table->integer('inscricao');
            $table->string('cpf');
            $table->string('curso');
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
        Schema::dropIfExists('distribuicoes');
    }
}
