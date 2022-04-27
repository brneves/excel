<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ModalidadesDeEnsinosTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('modalidades_de_ensinos')->insert(array (
        0 =>
        array (
            'nome' => 'Presencial',
            ),
        1 =>
        array (
            'nome' => 'À Distância',
            ),
       ));                                                                               
            
    }
}