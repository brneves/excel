<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDataExibeTratamentoInDatasAnalisesEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datas_analises_eventos', function (Blueprint $table) {
            $table->datetime('exibe_resultado_analise_tratamento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datas_analises_eventos', function (Blueprint $table) {
            $table->dropColumn('exibe_resultado_analise_tratamento');
        });
    }
}
