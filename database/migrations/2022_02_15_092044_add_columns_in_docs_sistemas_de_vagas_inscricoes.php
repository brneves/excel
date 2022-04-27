<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInDocsSistemasDeVagasInscricoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipos_documentos_sistemas_de_vagas_inscricoes', function (Blueprint $table) {
            
            $table->text('comentario')->nullable();
            $table->dateTime('data_hora_analise')->nullable();
            
            $table->unsignedbigInteger('id_motivos_indeferimentos')->nullable();
            $table->foreign('id_motivos_indeferimentos')
                ->references('id_motivos_indeferimentos')
                ->on('motivos_indeferimentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipos_documentos_sistemas_de_vagas_inscricoes', function (Blueprint $table) {
            //$table->dropForeign('id_motivos_indeferimentos');
            $table->dropColumn('id_motivos_indeferimentos');
            $table->dropColumn('data_hora_analise');
            $table->dropColumn('comentario');
        });
    }
}
