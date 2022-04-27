<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoteAnalistaTratamentosDiferenciadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes_analistas_tratamentos_diferenciais', function (Blueprint $table) {
            $table->bigIncrements('id_lotes_analistas_tratamentos_diferenciais')->index();

            $table->unsignedbigInteger('id_tratamentos_diferenciados_eventos_inscricoes');
            $table->foreign('id_tratamentos_diferenciados_eventos_inscricoes')
                ->references('id_tratamentos_diferenciados_eventos_inscricoes')
                ->on('tratamentos_diferenciados_eventos_inscricoes');

            $table->unsignedbigInteger('id_analista')->nullable();
            $table->foreign('id_analista')->references('id')->on('users');

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
        Schema::dropIfExists('lotes_analistas_tratamentos_diferenciais');
    }
}
