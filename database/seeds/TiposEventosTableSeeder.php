<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TiposEventosTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('tipos_eventos')->insert(array (
        0 =>
        array (
            'nome' => 'Solicitação de isenção',
            ),
        1 =>
        array (
            'nome' => 'Paes',
            ),
        2 =>
        array (
            'nome' => 'Profitec',
            ),
        3 =>
        array (
            'nome' => 'UemaNet',
            ),
        4 =>
        array (
            'nome' => 'Residência',
            ),
        5 =>
        array (
            'nome' => 'Transferência',
            ),  
        6 =>
        array (
            'nome' => 'Proetnos',
            ), 
        7 =>
        array (
            'nome' => 'Professor Substituto',
            ),                                                                           
       ));                                                                               
            
    }
}