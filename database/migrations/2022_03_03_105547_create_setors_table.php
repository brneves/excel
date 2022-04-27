<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setores', function (Blueprint $table) {
            $table->id('id_setores');
            $table->unsignedBigInteger('id_municipios');
            $table->foreign('id_municipios')->references('id_municipios')->on('municipios');
            $table->string('nome');
            $table->string('endereco');
            $table->string('numero');
            $table->string('cep');
            $table->string('bairro');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('qtd_sala');
            $table->string('qtd_candidato_sala');
            $table->string('qtd_banheiro');
            $table->string('responsavel');
            $table->string('celular');
            $table->string('email');
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
        Schema::dropIfExists('setores');
    }
}
