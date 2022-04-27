<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsencoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isencao', function (Blueprint $table) {
            $table->bigIncrements('id_isencao')->index();

            $table->boolean('analisado')->nullable();                //"analisado" bool NOT NULL,
            $table->bigInteger('ano_solicitacao')->nullable();          //"ano_solicitacao" int4 NOT NULL,
            $table->string('curso_superior')->nullable();           //"curso_superior" varchar(100),
            $table->boolean('em_andamento')->nullable();             //"em_andamento" bool NOT NULL,
            $table->string('numero_solicitacao')->nullable();       //"numero_solicitacao" varchar(45) NOT NULL,
            $table->bigInteger('id_analista')->nullable();              //"id_analista" int4,
            $table->bigInteger('id_concurso')->nullable();              //"id_concurso" int4 NOT NULL,
            $table->bigInteger('id_modalidade')->nullable();            //"id_modalidade" int4 NOT NULL,
            $table->bigInteger('id_motivo_indeferimento')->nullable();  //"id_motivo_indeferimento" int4,
            $table->bigInteger('id_pessoa')->nullable();                //"id_pessoa" int4 NOT NULL,
            $table->bigInteger('id_status')->nullable();                //"id_status" int4 NOT NULL,
            $table->bigInteger('id_status_final')->nullable();          //"id_status_final" int4,
            $table->timestamp('created_at')->nullable();               //"created_at" timestamp(6),
            $table->timestamp('updated_at')->nullable();               //"updated_at" timestamp(6),
            $table->bigInteger('version')->nullable();                  //"version" int8 DEFAULT 1 NOT NULL,
            $table->bigInteger('num_pessoas_familia')->nullable();      //"num_pessoas_familia" int4 DEFAULT 0 NOT NULL,
            $table->string('renda_familiar')->nullable();               //"renda_familiar" numeric(10,2) DEFAULT 0.00 NOT NULL,
            $table->bigInteger('ano_conclusao_ensino_medio')->nullable();   //"ano_conclusao_ensino_medio" int4,
            $table->bigInteger('ano_primeiro_deferimento')->nullable();     //"ano_primeiro_deferimento" int4,
            $table->boolean('deleted')->nullable();                      //"deleted" bool DEFAULT false NOT NULL,
            $table->string('_ebean_intercept')->nullable();         //"_ebean_intercept" bytea,
            $table->bigInteger('id_supervisor')->nullable();            //"id_supervisor" int4,
            $table->boolean('documentacao')->nullable();             //"documentacao" bool
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('isencao');
    }
}
