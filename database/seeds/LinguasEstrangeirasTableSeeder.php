<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LinguasEstrangeirasTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('linguas_estrangeiras')->insert(array (
        0 =>
        array (
            'nome' => 'Inglês',
            ),
        1 =>
        array (
            'nome' => 'Espanhol',
            ),
       ));                                                                               
            
    }
}