<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissoesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissoes_users', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_permissoes_users')->index();
            $table->timestamps();

            //chave estrangeira
            $table->unsignedbigInteger('id_permissoes');
            $table->foreign('id_permissoes')->references('id_permissoes')->on('permissoes');

            $table->unsignedbigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissoes_users');
    }
}
