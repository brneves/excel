<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetorEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setores_eventos', function (Blueprint $table) {
            $table->id('id_setores_eventos');
            $table->integer('id_eventos');
            $table->foreign('id_eventos')->references('id_eventos')->on('eventos');
            $table->integer('id_setores');
            $table->foreign('id_setores')->references('id_setores')->on('setores');
            $table->integer('id_tipos_distribuicoes');
            $table->foreign('id_tipos_distribuicoes')->references('id_tipos_distribuicoes')->on('tipos_distribuicoes');
            $table->string('qtd_salas');
            $table->integer('primeira_sala');
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
        Schema::dropIfExists('setores_eventos');
    }
}
