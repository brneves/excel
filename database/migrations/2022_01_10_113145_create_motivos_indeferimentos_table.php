<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotivosIndeferimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivos_indeferimentos', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_motivos_indeferimentos')->index();

            $table->longText('nome');
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
        Schema::dropIfExists('motivos_indeferimentos');
    }
}
