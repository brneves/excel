<?php

use Illuminate\Database\Seeder;

class QuestionarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Questionario::create([
            'id_eventos' => 18,
            'nome' => 'QUESTIONÁRIO SOCIOECONÔMICO E CULTURAL'
        ]);
    }
}
