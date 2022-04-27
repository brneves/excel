<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasSetoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas_setores', function (Blueprint $table) {
            $table->id('id_salas_setores');
            $table->unsignedBigInteger('id_setores_eventos');
            $table->foreign('id_setores_eventos')->references('id_setores_eventos')->on('setores_eventos');
            $table->string('sala');
            $table->string('qtd_cantidados');
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
        Schema::dropIfExists('salas_setores');
    }
}
