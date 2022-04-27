<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerguntasQuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perguntas_questionarios', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_perguntas_questionarios')->index();
            $table->unsignedBigInteger('id_questionarios');
            $table->foreign('id_questionarios')->references('id_questionarios')->on('questionarios');
            $table->string('nome', 250);
            $table->integer('ordem')->nullable();
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
        Schema::dropIfExists('perguntas_questionarios');
    }
}
