<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCronogramasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cronogramas_users', function (Blueprint $table) {
            //chave primária incremento automático
            $table->bigIncrements('id_cronogramas_users')->index();

            //chave estrangeira
            $table->unsignedbigInteger('id_cronogramas');
            $table->foreign('id_cronogramas')->references('id_cronogramas')->on('cronogramas');

            $table->unsignedbigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');       
            
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
        Schema::dropIfExists('cronogramas_users');
    }
}
