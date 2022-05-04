<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemessaDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remessa_detalhes', function (Blueprint $table) {
            $table->id('id_remessa_detalhes');
            $table->integer('id_remessas');
            $table->foreign('id_remessas')->references('id_remessas')->on('remessas');
            $table->string('nome');
            $table->string('data_vencimento');
            $table->string('data_pagamento')->comment('Dia do pagamento do boleto');
            $table->string('reftran');
            $table->integer('inscricao');
            $table->string('taxa_servico');
            $table->string('valor_recebido');
            $table->string('valor_boleto');

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
        Schema::dropIfExists('remessa_detalhes');
    }
}
