<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\TipoDocumentoSistemaDeVaga;

class SistemasDeVagasTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('sistemas_de_vagas')->insert(array (
        0 =>
        array (
            'nome' => 'Sistema Universal de Vagas',
            ),
        1 =>
        array (
            'nome' => 'E1 - Sistema Especial de Reservas de Vagas para Estudantes Negros ou de Comunidades Indígenas',
            ),
        2 =>
        array (
            'nome' => 'E2 - Sistema Especial de Reservas de Vagas para Pessoas com Deficiência',
            ),
        3 =>
        array (
            'nome' => 'E3 - Sistema Especial de Reservas das Vagas Exclusivas dos Cursos de CFO (PMMA E CBMMA), Para Candidatos Negros',
            ),
        ));

        //Documentos E1
        //negros
        TipoDocumentoSistemaDeVaga::create([
            'id_sistemas_de_vagas' => 2,
            'nome_documento_comprobatorio' => 'Autodeclaração',
            'negro_ou_indigena' => 'negro'
        ]);
        TipoDocumentoSistemaDeVaga::create([
            'id_sistemas_de_vagas' => 2,
            'nome_documento_comprobatorio' => 'Comprovante de ter cursado o ensino médio na rede pública',
            'negro_ou_indigena' => 'negro'
        ]);
        TipoDocumentoSistemaDeVaga::create([
            'id_sistemas_de_vagas' => 2,
            'nome_documento_comprobatorio' => 'Requerimento de inscrição com foto 3x4 de frente e recente',
            'negro_ou_indigena' => 'negro'
        ]);

        //indigenas
        TipoDocumentoSistemaDeVaga::create([
            'id_sistemas_de_vagas' => 2,
            'nome_documento_comprobatorio' => 'Autodeclaração',
            'negro_ou_indigena' => 'indigena'
        ]);
        TipoDocumentoSistemaDeVaga::create([
            'id_sistemas_de_vagas' => 2,
            'nome_documento_comprobatorio' => 'Registro Administrativo de Nascimento de Indígena (RANI) ou Declaração de Residência emitida pela Fundação Nacional do Índio',
            'negro_ou_indigena' => 'indigena'
        ]);
        TipoDocumentoSistemaDeVaga::create([
            'id_sistemas_de_vagas' => 2,
            'nome_documento_comprobatorio' => 'Comprovante de ter cursado o ensino médio na rede pública',
            'negro_ou_indigena' => 'indigena'
        ]);
        TipoDocumentoSistemaDeVaga::create([
            'id_sistemas_de_vagas' => 2,
            'nome_documento_comprobatorio' => 'Requerimento de inscrição com foto 3x4 de frente e recente',
            'negro_ou_indigena' => 'indigena'
        ]);

        //Documentos E2
        //pessoa com deficiência
        TipoDocumentoSistemaDeVaga::create([
            'id_sistemas_de_vagas' => 3,
            'nome_documento_comprobatorio' => 'Laudo Médico',
            'negro_ou_indigena' => null
        ]);

    }
}
