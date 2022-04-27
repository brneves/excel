<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCodigoInLocaisDeProvasEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locais_de_provas_eventos', function (Blueprint $table) {
            $table->string('codigo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locais_de_provas_eventos', function (Blueprint $table) {
            $table->dropColumn('codigo');
        });
    }
}
