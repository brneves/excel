<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_municipios')->index();
            $table->string('nome', 100)->nullable();
            $table->integer('iso');
            $table->integer('iso_ddd');
            $table->integer('status');
            $table->string('slug', 100)->nullable();
            $table->integer('populacao');
            $table->decimal('lat', 12,8);
            $table->decimal('long', 12,8);
            $table->decimal('income_per_capita', 8,2);
            $table->timestamps();

            //chave estrangeira
            $table->unsignedbigInteger('id_estados');
            $table->foreign('id_estados')->references('id_estados')->on('estados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
