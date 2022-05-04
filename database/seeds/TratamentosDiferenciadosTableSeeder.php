<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TratamentosDiferenciadosTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('tratamentos_diferenciados')->insert(array (
        0 =>
        array (
            'nome' => 'Prova com fonte ampliada (amblíopes)',
            ),
        1 =>
        array (
            'nome' => 'Auxílio de leitura da prova (ledor)',
            ),
        2 =>
        array (
            'nome' => 'Intérprete de LIBRAS (língua de sinais)',
            ),
        3 =>
        array (
            'nome' => 'Transcritor',
            ),
        4 =>
        array (
            'nome' => 'Atendimento hospitalar',
            ), 
        5 =>
        array (
            'nome' => 'Sala individual para candidatos com doenças contagiosas',
            ),  
        6 =>
        array (
            'nome' => 'Atendimento a lactantes',
            ),      
        7 =>
        array (
            'nome' => 'Sala térrea (dificuldade para locomoção, gestantes e idosos)',
            ),                                                                     
       ));                                                                               
            
    }
}