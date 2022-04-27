<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposDocumentosSistemasDeVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_documentos_sistemas_de_vagas', function (Blueprint $table) {
            $table->bigIncrements('id_tipos_documentos_sistemas_de_vagas')->index();

            $table->unsignedbigInteger('id_sistemas_de_vagas');
            $table->foreign('id_sistemas_de_vagas')
                ->references('id_sistemas_de_vagas')
                ->on('sistemas_de_vagas');

            $table->string('nome_documento_comprobatorio');
            $table->enum('negro_ou_indigena', ['negro', 'indigena'])->nullable()
                ->comment('Campo específico para delimitar os documentos obrigatórios do Sistema 
                Especial de Reservas de Vagas para Estudantes Negros ou de Comunidades Indígenas');

            $table->softDeletes();
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
        Schema::dropIfExists('tipos_documentos_sistemas_de_vagas');
    }
}
