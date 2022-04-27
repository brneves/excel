<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnAtivoTipoMotivoInMotivosIndeferimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('motivos_indeferimentos', function (Blueprint $table) {
            $table->string('tipo_motivo')->nullable();
            $table->boolean('ativo')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('motivos_indeferimentos', function (Blueprint $table) {
            $table->dropColumn('tipo_motivo');
            $table->dropColumn('ativo');
        });
    }
}
