<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StatusEventosTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('status_eventos')->insert(array (
        0 =>
        array (
            'nome' => 'Em andamento',
            ),
        1 =>
        array (
            'nome' => 'Encerrado',
            ),
        2 =>
        array (
            'nome' => 'Previsto',
            ),
        3 =>
        array (
            'nome' => 'Suspenso',
            ),
        4 =>
        array (
            'nome' => 'Cancelado',
            ),                                    
       ));                                                                               
            
    }
}