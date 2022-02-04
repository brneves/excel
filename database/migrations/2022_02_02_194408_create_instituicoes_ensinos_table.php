<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituicoesEnsinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicoes_ensinos', function (Blueprint $table) {
            $table->bigIncrements('id_instituicoes_ensinos')->index();

            $table->unsignedbigInteger('id_redes_ensinos');

            $table->string('administracao');
            $table->string('codigo');
            $table->string('localizacao');
            $table->string('nome');
            $table->string('regiao');

            //a UF pode ser encontrada pelo municipio
            $table->unsignedbigInteger('id_municipios');

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
        Schema::dropIfExists('instituicoes_ensinos');
    }
}
