<?php

use Illuminate\Database\Seeder;
use App\Models\TipoUnidade;

class TipoUnidadeTableSeeder extends Seeder
{
    public function run()
    {
        TipoUnidade::create([
            'nome' => 'Campus'
        ]);
        
        TipoUnidade::create([
            'nome' => 'Centro'
        ]);
        
        TipoUnidade::create([
            'nome' => 'Campi'
        ]);
    }
}