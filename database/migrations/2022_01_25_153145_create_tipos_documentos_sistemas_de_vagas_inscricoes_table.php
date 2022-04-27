<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposDocumentosSistemasDeVagasInscricoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_documentos_sistemas_de_vagas_inscricoes', function (Blueprint $table) {
            $table->bigIncrements('id_tipos_documentos_sistemas_de_vagas_inscricoes')->index();

            $table->unsignedbigInteger('id_inscricoes');
            $table->foreign('id_inscricoes')
                ->references('id_inscricoes')
                ->on('inscricoes');

            $table->unsignedbigInteger('id_tipos_documentos_sistemas_de_vagas');
            $table->foreign('id_tipos_documentos_sistemas_de_vagas')
                ->references('id_tipos_documentos_sistemas_de_vagas')
                ->on('tipos_documentos_sistemas_de_vagas');

            $table->unsignedbigInteger('id_analista')->nullable();
            $table->foreign('id_analista')->references('id')->on('users');  

            $table->unsignedbigInteger('id_status')->nullable();
            $table->foreign('id_status')->references('id_status')->on('status');

            $table->boolean('aceite_documento')->default(false);
            $table->string('caminho_arquivo')->nullable();
            $table->string('nome_arquivo')->nullable();
            $table->bigInteger('tamanho_arquivo')->nullable();

            $table->softDeletes();//softDelete para poder manter os dados e localizar o arquivo
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
        Schema::dropIfExists('tipos_documentos_sistemas_de_vagas_inscricoes');
    }
}
