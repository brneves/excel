<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinguasEstrangeirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linguas_estrangeiras', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_linguas_estrangeiras')->index();
            $table->string('nome', 60)->nullable();
            //$table->string('descricao', 100)->nullable();
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
        Schema::dropIfExists('linguas_estrangeiras');
    }
}
