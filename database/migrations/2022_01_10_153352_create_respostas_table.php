<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->id('id_respostas');
            $table->unsignedBigInteger('id_perguntas_questionarios');
            $table->foreign('id_perguntas_questionarios')->references('id_perguntas_questionarios')->on('perguntas_questionarios');
            $table->unsignedBigInteger('id_itens_pergunta');
            $table->foreign('id_itens_pergunta')->references('id_itens_pergunta')->on('itens_pergunta');
            $table->unsignedBigInteger('id_users_questionarios');
            $table->foreign('id_users_questionarios')->references('id_users_questionarios')->on('user_questionarios');
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
        Schema::dropIfExists('respostas');
    }
}
