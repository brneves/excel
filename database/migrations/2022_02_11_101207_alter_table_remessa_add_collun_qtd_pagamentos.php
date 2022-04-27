<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableRemessaAddCollunQtdPagamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('remessas', function (Blueprint $table){
            $table->integer('qtd_pagos')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('remessas', function (Blueprint $table){
            $table->dropColumn('qtd_pagos')->nullable();
        });
    }
}
