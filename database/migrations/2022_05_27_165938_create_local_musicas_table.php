<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalMusicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_musicas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_inscricao');
            $table->string('nome');
            $table->string('local_prova');
            $table->integer('id_local_prova');
            $table->string('local_curso');
            $table->integer('id_unidade_curso');
            $table->integer('cod_unidade_vaga');
            $table->integer('id_vagas_eventos');
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
        Schema::dropIfExists('local_musicas');
    }
}
