<?php

use Illuminate\Database\Seeder;

class TratamentoDiferenciadosEventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TratamentoDiferenciadoEvento::create([
            'id_eventos' => 18,
            'id_tratamentos_diferenciados' => 1
        ]);

        \App\Models\TratamentoDiferenciadoEvento::create([
            'id_eventos' => 18,
            'id_tratamentos_diferenciados' => 3
        ]);

        \App\Models\TratamentoDiferenciadoEvento::create([
            'id_eventos' => 18,
            'id_tratamentos_diferenciados' => 4
        ]);

        \App\Models\TratamentoDiferenciadoEvento::create([
            'id_eventos' => 18,
            'id_tratamentos_diferenciados' => 5
        ]);

        \App\Models\TratamentoDiferenciadoEvento::create([
            'id_eventos' => 18,
            'id_tratamentos_diferenciados' => 9
        ]);
    }
}
