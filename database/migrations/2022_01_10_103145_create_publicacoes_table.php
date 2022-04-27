<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacoes', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_publicacoes')->index();

            $table->string('nome', 150);
            $table->string('link', 255);
            $table->date('data_publicacao');

            //chave estrangeira eventos
            $table->unsignedbigInteger('id_eventos');
            $table->foreign('id_eventos')->references('id_eventos')->on('eventos');
            
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
        Schema::dropIfExists('publicacoes');
    }
}
