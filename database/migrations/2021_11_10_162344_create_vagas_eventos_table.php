<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas_eventos', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_vagas_eventos')->index();

            //chave estrangeira vagas
            $table->unsignedbigInteger('id_vagas');
            $table->foreign('id_vagas')->references('id_vagas')->on('vagas');

            //chave estrangeira eventos
            $table->unsignedbigInteger('id_eventos');
            $table->foreign('id_eventos')->references('id_eventos')->on('eventos');

            //chave estrangeira sistema de vagas
            $table->unsignedbigInteger('id_sistemas_de_vagas');
            $table->foreign('id_sistemas_de_vagas')
                ->references('id_sistemas_de_vagas')
                ->on('sistemas_de_vagas');

            //chave estrangeira turnos
            $table->unsignedbigInteger('id_turnos');
            $table->foreign('id_turnos')->references('id_turnos')->on('turnos');

            //chave estrangeira linguas estrangeiras
            $table->unsignedbigInteger('id_linguas_estrangeiras')->nullable();
            $table->foreign('id_linguas_estrangeiras')
                ->references('id_linguas_estrangeiras')
                ->on('linguas_estrangeiras');

            //chave estrangeira sexos
            $table->unsignedbigInteger('id_sexos')->nullable();
            $table->foreign('id_sexos')->references('id_sexos')->on('sexos');

            //chave estrangeira grupos
            $table->unsignedbigInteger('id_grupos');
            $table->foreign('id_grupos')->references('id_grupos')->on('grupos');

            $table->bigInteger('qtd_vagas');
            $table->bigInteger('valor')->nullable();
            $table->enum('semestre', ['1', '2']);
            $table->string('ano', 4);
            $table->string('cod_edital');

            //chave estrangeira unidades
            $table->unsignedbigInteger('id_unidades');
            $table->foreign('id_unidades')->references('id_unidades')->on('unidades');

            //chave estrangeira sim nao
            $table->unsignedbigInteger('teste_de_aptidao');
            $table->foreign('teste_de_aptidao')
                ->references('id_sim_nao')
                ->on('sim_nao');

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
        Schema::dropIfExists('vagas_eventos');
    }
}
