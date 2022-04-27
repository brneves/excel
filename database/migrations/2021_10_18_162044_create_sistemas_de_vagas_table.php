<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemasDeVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemas_de_vagas', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_sistemas_de_vagas')->index();
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
        Schema::dropIfExists('sistemas_de_vagas');
    }
}
