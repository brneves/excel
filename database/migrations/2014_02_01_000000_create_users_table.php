<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->string('email')->comment('unique retirado devido a dump');
            $table->string('cpf',11)->unique();
            $table->timestamp('email_verified_at')->nullable();         
            $table->string('password');
            $table->string('foto', 200)->nullable();                    
            $table->boolean("administrador")->default(false);
            $table->boolean('usr_ativo')->default(true);
            //dados pessoais
            $table->string('sexo');
            $table->string('cor_pele')->nullable()->comment('nullable devido a dump'); 
            $table->date('data_nascimento'); 
            //dados documento de indentificação
            $table->string('dco_tipo');
            $table->string('dco_numero'); 
            $table->string('dco_expedidor')->nullable()->comment('nullable devido a dump'); 
            $table->date('dco_data_expedicao')->nullable()->comment('nullable devido a dump'); 
            $table->string('dco_naturalidade')->nullable()->comment('nullable devido a dump'); 
            $table->string('dco_uf')->nullable()->comment('nullable devido a dump'); 
            $table->string('dco_nacionalidade')->nullable()->comment('nullable devido a dump'); 
            //dados de endereço
            $table->string('end_cep'); 
            $table->string('end_endereco'); 
            $table->string('end_complemento')->nullable();              
            $table->string('end_numero'); 
            $table->string('end_bairro'); 
            $table->string('end_cidade'); 
            $table->string('end_estado')->nullable()->comment('nullable devido a dump');                     
            //dados de contato
            $table->string('telefone1')->nullable()->comment('nullable devido a dump');  
            $table->string('telefone2')->nullable();                    
            //mae e pai
            $table->string('dcg_mae'); 
            $table->string('dcg_pai')->nullable();                      //
            //dados de eleitor
            $table->string('dcg_titulo_eleitor_numero')->nullable()->comment('nullable devido a dump'); 
            $table->string('dcg_titulo_eleitor_zona')->nullable()->comment('nullable devido a dump'); 
            $table->string('dcg_titulo_eleitor_secao')->nullable()->comment('nullable devido a dump'); 
            $table->string('dcg_titulo_eleitor_data')->nullable()->comment('nullable devido a dump'); 
            //estado civil
            $table->string('estado_civil')->nullable();                 
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
