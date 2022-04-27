<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemPerguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_pergunta', function (Blueprint $table) {
            $table->id('id_itens_pergunta');
            $table->unsignedBigInteger('id_perguntas_questionarios');
            $table->foreign('id_perguntas_questionarios')->references('id_perguntas_questionarios')->on('perguntas_questionarios');
            $table->text('nome');
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
        Schema::dropIfExists('itens_pergunta');
    }
}
