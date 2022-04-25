<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscricoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricoes', function (Blueprint $table) {
            $table->bigIncrements('id_inscricoes')->index();

            $table->boolean('analisado');
            $table->bigInteger('classificacao')->nullable();
            $table->boolean('em_andamento');
            $table->boolean('isento');
            $table->string('numero_inscricao');
            $table->boolean('pagamento_efetuado');
            $table->boolean('segunda_via_boleto')->nullable();

            $table->unsignedbigInteger('id_analista')->nullable();
            $table->foreign('id_analista')->references('id')->on('users');  

            $table->unsignedbigInteger('id_instituicoes_ensinos');
            $table->foreign('id_instituicoes_ensinos')
                ->references('id_instituicoes_ensinos')
                ->on('instituicoes_ensinos'); 

            $table->unsignedbigInteger('id_linguas_estrangeiras');
            $table->foreign('id_linguas_estrangeiras')
                ->references('id_linguas_estrangeiras')
                ->on('linguas_estrangeiras');

            $table->unsignedbigInteger('id_motivos_indeferimentos')->nullable();
            $table->foreign('id_motivos_indeferimentos')
                ->references('id_motivos_indeferimentos')
                ->on('motivos_indeferimentos');

            $table->unsignedbigInteger('id_pessoa');
            $table->foreign('id_pessoa')->references('id')->on('users');  
            
            $table->unsignedbigInteger('id_status');
            $table->foreign('id_status')->references('id_status')->on('status');

            $table->unsignedbigInteger('id_vagas_eventos');
            $table->foreign('id_vagas_eventos')
                ->references('id_vagas_eventos')
                ->on('vagas_eventos');

            $table->unsignedbigInteger('id_vagas_eventos_segunda_opcao')->nullable();
            $table->foreign('id_vagas_eventos_segunda_opcao')
                ->references('id_vagas_eventos')
                ->on('vagas_eventos');

            $table->unsignedbigInteger('id_linguas_estrangeiras_segunda_opcao')->nullable();
            $table->foreign('id_linguas_estrangeiras_segunda_opcao')
                ->references('id_linguas_estrangeiras')
                ->on('linguas_estrangeiras');

            //$table->bigInteger('version');

            $table->unsignedbigInteger('id_locais_de_provas_eventos');
            $table->foreign('id_locais_de_provas_eventos')
                ->references('id_locais_de_provas_eventos')
                ->on('locais_de_provas_eventos');

            $table->boolean('necessita_tratamento_diferenciado');
            $table->boolean('questionario_respondido');

            $table->unsignedbigInteger('id_vagas_eventos_final');
            $table->foreign('id_vagas_eventos_final')
                ->references('id_vagas_eventos')
                ->on('vagas_eventos');

            $table->boolean('confirmacao_tratamento_diferenciado');
            $table->float('nota_teste_aptidao', 8, 2)->nullable();

            $table->unsignedbigInteger('id_supervisor')->nullable();
            $table->foreign('id_supervisor')->references('id')->on('users'); 

            $table->boolean('isento_comissao');
            $table->boolean('indeferido_judicial');

            $table->unsignedbigInteger('id_eventos');
            $table->foreign('id_eventos')->references('id_eventos')->on('eventos');

            $table->softDeletes();
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
        Schema::dropIfExists('inscricoes');
    }
}
