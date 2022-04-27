<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StatusTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('status')->insert([
            'nome' => 'Ativado',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('status')->insert([
            'nome' => 'Desativado',
            'created_at' => date("Y-m-d H:i:s"),         
        ]);  
        
        DB::table('status')->insert([
            'nome' => 'Deferido',
            'created_at' => date("Y-m-d H:i:s"),         
        ]);

        DB::table('status')->insert([
            'nome' => 'Indeferido',
            'created_at' => date("Y-m-d H:i:s"),         
        ]);

        DB::table('status')->insert([
            'nome' => 'Em Análise',
            'created_at' => date("Y-m-d H:i:s"),         
        ]);

        DB::table('status')->insert([
            'nome' => 'Solicitado',
            'created_at' => date("Y-m-d H:i:s"),         
        ]);

        DB::table('status')->insert([
            'nome' => 'Aguardando Confirmação de Pagamento',
            'created_at' => date("Y-m-d H:i:s"),         
        ]);
    }
}