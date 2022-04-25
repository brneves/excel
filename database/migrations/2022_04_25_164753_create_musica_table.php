<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musica', function (Blueprint $table) {
            $table->id('id_inscricoes');
            $table->string('nome');
            $table->string('cpf');
            $table->integer('id_vagas_eventos');
            $table->integer('id_sistema_vaga_v1');
            $table->integer('id_vagas_eventos_segunda_opcao');
            $table->integer('id_sistema_vagas_v2');
            $table->integer('id_vagas_eventos_final')->nullable();
            $table->float('nota_teste_aptidao')->nullable();
            $table->integer('id_vaga_final')->nullable();
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musica');
    }
}
