<?php

use Illuminate\Database\Seeder;
use App\Models\TratamentoDiferenciado;

class TratamentoDiferenciadoTableSeeder extends Seeder
{
    public function run()
    {
        TratamentoDiferenciado::create([
            'nome' => 'Provas com fonte ampliada (amblíopes)',
            'nome_documento_comprobatorio' => 'Laudo Médico - Fonte Ampliada',
        ]);
        TratamentoDiferenciado::create([
            'nome' => 'Provas em Braille',
            'nome_documento_comprobatorio' => 'Laudo Médico - Braille',
        ]);
        TratamentoDiferenciado::create([
            'nome' => 'Auxílio de leitura da prova (ledor)',
            'nome_documento_comprobatorio' => 'Laudo Médico - Ledor',
        ]);
        TratamentoDiferenciado::create([
            'nome' => 'Intérprete de LIBRAS (Língua Brasileira de Sinais)',
            'nome_documento_comprobatorio' => 'Laudo Médico - Libras',
        ]);
        TratamentoDiferenciado::create([
            'nome' => 'Transcritor',
            'nome_documento_comprobatorio' => 'Laudo Médico - Transcritor',
        ]);
        TratamentoDiferenciado::create([
            'nome' => 'Atendimento Hospitalar',
            'nome_documento_comprobatorio' => 'Laudo Médico - Atendimento Hospitalar',
        ]);
        TratamentoDiferenciado::create([
            'nome' => 'Sala individual para candidatos com doenças contagiosas e outras situações',
            'nome_documento_comprobatorio' => 'Laudo Médico - Doenças Contagiosas',
        ]);
        TratamentoDiferenciado::create([
            'nome' => 'Atendimento a lactantes',
            'nome_documento_comprobatorio' => 'Laudo Médico - Lactantes',
        ]);
        TratamentoDiferenciado::create([
            'nome' => 'Sala térrea (deficiência física)',
            'nome_documento_comprobatorio' => 'Laudo Médico - Sala Térrea',
        ]);
        TratamentoDiferenciado::create([
            'nome' => 'Outro',
            'nome_documento_comprobatorio' => 'Laudo Médico - Outro',
        ]);
    }
}
