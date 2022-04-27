<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnNomeDocumentoComprobatorioInTratamentosDiferenciados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tratamentos_diferenciados', function (Blueprint $table) {
            $table->string('nome_documento_comprobatorio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tratamentos_diferenciados', function (Blueprint $table) {
            $table->dropColumn('nome_documento_comprobatorio');
        });
    }
}
