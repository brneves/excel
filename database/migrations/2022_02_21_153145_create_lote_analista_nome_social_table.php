<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoteAnalistaNomeSocialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes_analistas_nomes_sociais', function (Blueprint $table) {
            $table->bigIncrements('id_lotes_analistas_nomes_sociais')->index();

            $table->unsignedbigInteger('id_nomes_sociais_inscricoes');
            $table->foreign('id_nomes_sociais_inscricoes')
                ->references('id_nomes_sociais_inscricoes')
                ->on('nomes_sociais_inscricoes');

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
        Schema::dropIfExists('lotes_analistas_nomes_sociais');
    }
}
