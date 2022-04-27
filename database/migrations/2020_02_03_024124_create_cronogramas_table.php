<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCronogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cronogramas', function (Blueprint $table) {
            $table->bigIncrements('id_cronogramas')->index();
            $table->datetime('inicio');
            $table->datetime('fim');
            $table->timestamps();

            //chave estrangeira
            $table->unsignedbigInteger('id_eventos');
            $table->foreign('id_eventos')->references('id_eventos')->on('eventos');

            $table->unsignedbigInteger('id_itens_cronogramas');
            $table->foreign('id_itens_cronogramas')->references('id_itens_cronogramas')->on('itens_cronogramas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cronogramas');
    }
}
