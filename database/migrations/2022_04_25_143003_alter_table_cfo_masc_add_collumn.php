<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCfoMascAddCollumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cfo_masc', function (Blueprint $table){
            $table->integer('vaga_nova')->nullable();
            $table->integer('vaga_final_nova')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cfo_masc', function (Blueprint $table){
            $table->dropColumn('vaga_nova');
            $table->dropColumn('vaga_final_nova');
        });
    }
}
