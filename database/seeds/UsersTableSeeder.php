<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->where('cpf', 25156012353)->update([
            'password'  => bcrypt('25156012353'),
            'administrador'     => 'true',
        ]);

        DB::table('users')->where('cpf', 67227864391)->update([
            //'password'  => bcrypt('67227864391'),
            'administrador'     => 'true',
        ]);

        DB::table('users')->insert([
            'name'      => 'Nildson de Castro Pinheiro Mello',
            'email'     => 'nildsond@gmail.com',
            'password'  => bcrypt('61222785307'),
            'cpf'     => '61222785307',
            'administrador'     => 'true',       
            'sexo' => 'masculino',
            'cor_pele' => 'Branco', 
            'data_nascimento' => date("Y-m-d"),
            'dco_tipo' => 'RG',
            'dco_numero' => '123456789',
            'dco_expedidor' => 'SSP',
            'dco_data_expedicao' => date("Y-m-d"),
            'dco_naturalidade' => 'MA',
            'dco_uf' => 'MA',
            'dco_nacionalidade' => 'Brasileiro',
            'end_cep' => '65000000',
            'end_endereco' => 'teste',
            'end_complemento' => 'teste',
            'end_numero' => 'teste',
            'end_bairro' => 'teste',
            'end_cidade' => 'teste',
            'end_estado' => 'teste',
            'telefone1' => '988770000',
            'telefone2' => '988770000',
            'dcg_mae' => 'teste',
            'dcg_pai' => 'teste',
            'dcg_titulo_eleitor_numero' => '12345',
            'dcg_titulo_eleitor_zona' => '123',
            'dcg_titulo_eleitor_secao' => '123',
            'dcg_titulo_eleitor_data' => date("Y-m-d"),
            'dcg_numero_reservista' => '1223',
            'dcg_expedidor_reservista' => 'SSP',
            'dcg_data_reservista' => date("Y-m-d"),
            'dcg_uf_reservista' => 'MA',
            'nat_cidade' => 'MA',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        
    }
}
