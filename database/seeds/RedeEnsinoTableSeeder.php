<?php

use Illuminate\Database\Seeder;
use App\Models\RedeEnsino;

class RedeEnsinoTableSeeder extends Seeder
{
    public function run()
    {
        RedeEnsino::create([
            'nome' => 'PÚBLICA - Municípios do Maranhão'
        ]);
        
        RedeEnsino::create([
            'nome' => 'PARTICULAR - Municípios do Maranhão'
        ]);
        
        RedeEnsino::create([
            'nome' => 'PÚBLICA - Outros Estados'
        ]);
        
        RedeEnsino::create([
            'nome' => 'PARTICULAR - Outros Estados'
        ]);
    }
}