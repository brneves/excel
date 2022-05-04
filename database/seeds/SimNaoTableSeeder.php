<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SimNaoTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('sim_nao')->insert(array (
        0 =>
        array (
            'nome' => 'Sim',
            ),
        1 =>
        array (
            'nome' => 'Não',
            ),
       ));                                                                               
            
    }
}