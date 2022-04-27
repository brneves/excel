<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomesSociaisInscricoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomes_sociais_inscricoes', function (Blueprint $table) {
            $table->bigIncrements('id_nomes_sociais_inscricoes')->index();

            $table->unsignedbigInteger('id_inscricoes');
            $table->foreign('id_inscricoes')
                ->references('id_inscricoes')
                ->on('inscricoes');

            $table->unsignedbigInteger('id_analista')->nullable();
            $table->foreign('id_analista')->references('id')->on('users');  

            $table->unsignedbigInteger('id_status')->nullable();
            $table->foreign('id_status')->references('id_status')->on('status');

            $table->string('nome_social')->nullable();
            $table->text('nome_tipo_documento')->default(
                'CPF e Documento de identidade ou declaração autenticada em cartório e 
                assinada pelo candidato em que conste o nome social, conforme Resolução 
                CsU nº 736/2015. Agrupe os documentos em um único PDF'
            );
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
        Schema::dropIfExists('nomes_sociais_inscricoes');
    }
}
