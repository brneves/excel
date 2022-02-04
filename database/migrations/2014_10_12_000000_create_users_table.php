<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //dados padrões da tabela
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cpf',11)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('foto', 200)->nullable();
            $table->boolean("administrador")->default(false);
            $table->boolean('usr_ativo')->default(true);
            //dados pessoais
            $table->string('sexo');
            $table->string('cor_pele')->nullable();
            $table->date('data_nascimento');
            //dados documento de indentificação
            $table->string('dco_tipo');
            $table->string('dco_numero');
            $table->string('dco_expedidor');
            $table->date('dco_data_expedicao');
            $table->string('dco_naturalidade');
            $table->string('dco_uf');
            $table->string('dco_nacionalidade');
            //dados de endereço
            $table->string('end_cep');
            $table->string('end_endereco');
            $table->string('end_complemento');
            $table->string('end_numero');
            $table->string('end_bairro');
            $table->string('end_cidade');
            $table->string('end_estado')->nullable();
            //dados de contato
            $table->string('telefone1');
            $table->string('telefone2')->nullable();
            //mae e pai
            $table->string('dcg_mae');
            $table->string('dcg_pai');
            //dados de eleitor
            $table->string('dcg_titulo_eleitor_numero')->nullable();
            $table->string('dcg_titulo_eleitor_zona')->nullable();
            $table->string('dcg_titulo_eleitor_secao')->nullable();
            $table->string('dcg_titulo_eleitor_data')->nullable();
            //dados de reservista
            $table->string('dcg_numero_reservista')->nullable();
            $table->string('dcg_expedidor_reservista')->nullable();
            $table->string('dcg_data_reservista')->nullable();
            $table->string('dcg_uf_reservista')->nullable();
            //naturalidade
            $table->string('nat_cidade')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
