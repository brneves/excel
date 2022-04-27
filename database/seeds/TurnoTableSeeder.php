<?php

use Illuminate\Database\Seeder;
use App\Models\Turno;

class TurnoTableSeeder extends Seeder
{
    public function run()
    {
        Turno::create([
            'nome' => 'Matutino'
        ]);
        
        Turno::create([
            'nome' => 'Vespertino'
        ]);
        
        Turno::create([
            'nome' => 'Diurno'
        ]);
        
        Turno::create([
            'nome' => 'Noturno (e sábado pela manhã)'
        ]);
        
        Turno::create([
            'nome' => 'Integral'
        ]);
        
        Turno::create([
            'nome' => 'Noturno'
        ]);
        
        Turno::create([
            'nome' => 'Matutino (e sábado pela manhã)'
        ]);
        
        Turno::create([
            'nome' => 'Vespertino (e sábado pela manhã)'
        ]);
        
        Turno::create([
            'nome' => 'Noturno(e sábado-tarde)'
        ]);
    }
}