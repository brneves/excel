<?php

use Illuminate\Database\Seeder;
use App\Models\Sexo;

class SexoTableSeeder extends Seeder
{
    public function run()
    {
        Sexo::create([
            'nome' => 'Masculino'
        ]);     
        
        Sexo::create([
            'nome' => 'Feminino'
        ]); 
    }
}