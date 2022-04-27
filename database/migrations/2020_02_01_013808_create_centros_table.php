<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_centros')->index();
            $table->string('nome', 100)->nullable();
            $table->string('sigla', 10)->nullable();
            $table->timestamps();

            //chave estrangeira
            $table->unsignedbigInteger('id_estados');
            $table->foreign('id_estados')->references('id_estados')->on('estados');

            $table->unsignedbigInteger('id_municipios');
            $table->foreign('id_municipios')->references('id_municipios')->on('municipios');            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centros');
    }
}
