<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosParaUploadsEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_para_uploads_eventos', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_documentos_para_uploads_eventos')->index();

            //chave estrangeira eventos
            $table->unsignedbigInteger('id_eventos');
            $table->foreign('id_eventos')->references('id_eventos')->on('eventos');

            //chave estrangeira documentos para upload
            $table->unsignedbigInteger('id_documentos_para_uploads');
            $table->foreign('id_documentos_para_uploads')
                ->references('id_documentos_para_uploads')
                ->on('documentos_para_uploads');

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
        Schema::dropIfExists('documentos_para_uploads_eventos');
    }
}
