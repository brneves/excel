<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissoesPerfisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissoes_perfis', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_permissoes_perfis')->index();
            $table->timestamps();

            //chave estrangeira
            $table->unsignedbigInteger('id_permissoes');
            $table->foreign('id_permissoes')->references('id_permissoes')->on('permissoes');

            $table->unsignedbigInteger('id_perfis');
            $table->foreign('id_perfis')->references('id_perfis')->on('perfis');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissoes_perfis');
    }
}
