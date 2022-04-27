<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_unidades')->index();

            //chave estrangeira municipios
            $table->unsignedbigInteger('id_municipios')->nullable();
            $table->foreign('id_municipios')
                ->references('id_municipios')
                ->on('municipios');

            $table->unsignedbigInteger('id_siguema')->nullable();

            $table->string('nome', 150);
            $table->string('sigla', 60);

            //chave estrangeira tipo unidade
            $table->unsignedbigInteger('id_tipos_unidades');
            $table->foreign('id_tipos_unidades')
                ->references('id_tipos_unidades')
                ->on('tipos_unidades');

            $table->string('cod_unidade');
            $table->boolean('filial');

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
        Schema::dropIfExists('unidades');
    }
}
