<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasAnalisesEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas_analises_eventos', function (Blueprint $table) {
            $table->bigIncrements('id_datas_analises_eventos')->index();
            
            $table->unsignedbigInteger('id_eventos')->unique();
            $table->foreign('id_eventos')->references('id_eventos')->on('eventos');

            $table->datetime('inicio_analise')->default(date('Y-m-d H:i:s'));
            $table->datetime('fim_analise')->default(date('Y-m-d H:i:s'));

            $table->datetime('inicio_analise_recurso')->default(date('Y-m-d H:i:s'));
            $table->datetime('fim_analise_recurso')->default(date('Y-m-d H:i:s'));

            $table->datetime('inicio_pedido_recurso')->default(date('Y-m-d H:i:s'));
            $table->datetime('fim_pedido_recurso')->default(date('Y-m-d H:i:s'));

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
        Schema::dropIfExists('datas_analises_eventos');
    }
}
