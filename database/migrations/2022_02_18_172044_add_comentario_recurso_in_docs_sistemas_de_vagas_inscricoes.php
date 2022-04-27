<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddComentarioRecursoInDocsSistemasDeVagasInscricoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipos_documentos_sistemas_de_vagas_inscricoes', function (Blueprint $table) {
            
            $table->text('comentario_recurso')->nullable();
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
            $table->dropColumn('comentario_recurso');
        });
    }
}
