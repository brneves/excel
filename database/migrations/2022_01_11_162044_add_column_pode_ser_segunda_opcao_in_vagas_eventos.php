<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPodeSerSegundaOpcaoInVagasEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vagas_eventos', function (Blueprint $table) {
            $table->boolean('pode_ser_segunda_opcao')->default(true);
            $table->boolean('tem_segunda_opcao')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vagas_eventos', function (Blueprint $table) {
            $table->dropColumn('tem_segunda_opcao');
            $table->dropColumn('pode_ser_segunda_opcao');
        });
    }
}
