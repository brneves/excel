<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_eventos')->index();
            $table->string('nome', 250)->nullable();
            $table->string('ano_referencia', 4)->nullable();
            $table->string('logomarca', 100)->nullable();

            $table->string('nome_resumido', 100)->nullable();
            $table->text('descricao',500)->nullable();
            $table->double('taxa_unica', 8,2)->nullable();

            $table->string('edital', 100)->nullable();
            $table->string('url_edital', 250)->nullable();
            $table->string('url_resultado', 250)->nullable();
            $table->string('convenio_comercio_eletronico', 10)->nullable();
            $table->string('convenio_cobranca', 10)->nullable();
            $table->date('data_vencimento_boleto')->nullable();
            $table->string('mensagem_boleto', 150)->nullable();
            $table->integer('id_eventos_para_isencao')->nullable();
            $table->string('departamento_solicitante', 150)->nullable();

            //chave estrangeira
            $table->unsignedbigInteger('id_status_eventos');
            $table->foreign('id_status_eventos')->references('id_status_eventos')->on('status_eventos');

            //chave estrangeira
            $table->unsignedbigInteger('id_tipos_eventos');
            $table->foreign('id_tipos_eventos')->references('id_tipos_eventos')->on('tipos_eventos');

            $table->unsignedbigInteger('tem_questionario');
            $table->foreign('tem_questionario')->references('id_sim_nao')->on('sim_nao');

            $table->unsignedbigInteger('tem_taxa');
            $table->foreign('tem_taxa')->references('id_sim_nao')->on('sim_nao');

            $table->unsignedbigInteger('tem_taxa_unica');
            $table->foreign('tem_taxa_unica')->references('id_sim_nao')->on('sim_nao');

            $table->unsignedbigInteger('isencao_na_hora_da_inscricao');
            $table->foreign('isencao_na_hora_da_inscricao')->references('id_sim_nao')->on('sim_nao');

            $table->unsignedbigInteger('tem_upload_documento');
            $table->foreign('tem_upload_documento')->references('id_sim_nao')->on('sim_nao');

            $table->unsignedbigInteger('id_estados');
            $table->foreign('id_estados')->references('id_estados')->on('estados');

            $table->unsignedbigInteger('id_municipios');
            $table->foreign('id_municipios')->references('id_municipios')->on('municipios');

            $table->unsignedbigInteger('id_centros');
            $table->foreign('id_centros')->references('id_centros')->on('centros');


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
        Schema::dropIfExists('eventos');
    }
}
