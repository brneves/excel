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
            $table->integer('id_setores');
            $table->integer('id_tipos_distribuicoes');
            $table->string('qtd_salas');
            $table->integer('primeira_sala');
            $table->string('codigo');
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
