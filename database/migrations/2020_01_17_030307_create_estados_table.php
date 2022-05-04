<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_estados')->index();
            $table->string('nome', 50)->nullable();
            $table->string('sigla', 2)->nullable();
            $table->integer('iso');
            $table->string('slug', 50)->nullable();
            $table->integer('populacao');            
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
        Schema::dropIfExists('estados');
    }
}
