<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoteAnalistaSistemaDeVagaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes_analistas_sistemas_de_vagas', function (Blueprint $table) {
            $table->bigIncrements('id_lotes_analistas_sistemas_de_vagas')->index();

            $table->unsignedbigInteger('id_tipos_documentos_sistemas_de_vagas_inscricoes');
            $table->foreign('id_tipos_documentos_sistemas_de_vagas_inscricoes')
                ->references('id_tipos_documentos_sistemas_de_vagas_inscricoes')
                ->on('tipos_documentos_sistemas_de_vagas_inscricoes');

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
        Schema::dropIfExists('lotes_analistas_sistemas_de_vagas');
    }
}
