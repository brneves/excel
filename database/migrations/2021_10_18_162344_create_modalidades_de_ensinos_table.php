<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalidadesDeEnsinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalidades_de_ensinos', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_modalidades_de_ensinos')->index();
            $table->string('nome', 150)->nullable();
            //$table->string('descricao', 100)->nullable();
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
        Schema::dropIfExists('modalidades_de_ensinos');
    }
}
