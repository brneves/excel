<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnNegroIndigenaInInscricoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inscricoes', function (Blueprint $table) {
            $table->enum('negro_ou_indigena', ['negro', 'indigena'])
                ->nullable()
                ->comment(
                    'Campo específico para delimitar os documentos obrigatórios do Sistema 
                    Especial de Reservas de Vagas para Estudantes Negros ou de Comunidades Indígenas.
                    Tem Valor Nulo caso não seja negro e nem indigena'
                );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inscricoes', function (Blueprint $table) {
            $table->dropColumn('negro_ou_indigena');
        });
    }
}
