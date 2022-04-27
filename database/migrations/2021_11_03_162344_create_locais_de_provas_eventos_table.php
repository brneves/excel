<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocaisDeProvasEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locais_de_provas_eventos', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_locais_de_provas_eventos')->index();

            //chave estrangeira eventos
            $table->unsignedbigInteger('id_eventos');
            $table->foreign('id_eventos')->references('id_eventos')->on('eventos');

            //chave estrangeira
            $table->unsignedbigInteger('id_municipios');
            $table->foreign('id_municipios')
                ->references('id_municipios')
                ->on('municipios');

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
        Schema::dropIfExists('locais_de_provas_eventos');
    }
}
