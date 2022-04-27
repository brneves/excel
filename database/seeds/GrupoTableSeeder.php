<?php

use Illuminate\Database\Seeder;

class GrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Grupo::create([
            'nome' => '01'
        ]);

        \App\Models\Grupo::create([
            'nome' => '02'
        ]);

        \App\Models\Grupo::create([
            'nome' => '03'
        ]);

        \App\Models\Grupo::create([
            'nome' => '04'
        ]);

        \App\Models\Grupo::create([
            'nome' => '05'
        ]);

        \App\Models\Grupo::create([
            'nome' => '06'
        ]);

        \App\Models\Grupo::create([
            'nome' => '07'
        ]);

        \App\Models\Grupo::create([
            'nome' => '08'
        ]);

        \App\Models\Grupo::create([
            'nome' => '09'
        ]);

        \App\Models\Grupo::create([
            'nome' => '10'
        ]);

        \App\Models\Grupo::create([
            'nome' => '11'
        ]);

        \App\Models\Grupo::create([
            'nome' => '00'
        ]);

    }
}
