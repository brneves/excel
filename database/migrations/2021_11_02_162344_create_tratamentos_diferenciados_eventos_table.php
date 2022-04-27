<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratamentosDiferenciadosEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamentos_diferenciados_eventos', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_tratamentos_diferenciados_eventos')->index();

            //chave estrangeira eventos
            $table->unsignedbigInteger('id_eventos');
            $table->foreign('id_eventos')->references('id_eventos')->on('eventos');

            //chave estrangeira documentos para upload
            $table->unsignedbigInteger('id_tratamentos_diferenciados');
            $table->foreign('id_tratamentos_diferenciados')
                ->references('id_tratamentos_diferenciados')
                ->on('tratamentos_diferenciados');

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
        Schema::dropIfExists('tratamentos_diferenciados_eventos');
    }
}
