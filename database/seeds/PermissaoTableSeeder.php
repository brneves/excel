<?php

use Illuminate\Database\Seeder;
use App\Models\Permissao;
use Illuminate\Support\Str;

class PermissaoTableSeeder extends Seeder
{
    public function run()
    {
        $crud = [
            'cadastrar',  //create
            'visualizar', //index e show
            'atualizar',  //update
            'deletar'     //destroy
        ];

        //permissões não relacionadas com o cronograma especifico do evento
        $tipos_permissoes = [
            'administradores',
            'eventos',
            'itens_dos_cronogramas',
            'cronogramas',
            //nao estao em producao: 
            'usuarios',
            'permissoes',
            'tratamentos_diferenciados',
            'linguas_estrangeiras',
            'sistemas_de_vagas',
            'modalidades_de_ensinos',
            'documentos_para_upload',
            'turnos',
            'grupos',
            'tipos_de_unidades',
            'unidades',
            'vagas',
            'motivos_indeferimentos',
            'sexos',
            'status',
            'redes_de_ensinos',
            'instituicoes_de_ensinos',
            'usuarios_permissoes',
            'usuarios_permissoes_cronogramas',
        ];

        //foreach ($tipos_permissoes as $tipo) {
        //    foreach ($crud as $metodo) {
        //        Permissao::create([
        //            'nome' => $metodo."_".$tipo,
        //            'descricao' => 
        //                Str::of("O usuário com esta permissão pode ".$metodo." ".$tipo)
        //                ->replace('_', ' ')
        //        ]);
        //    }
        //}  
        Permissao::create([
            'nome' => 'gerenciar_eventos',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_itens_dos_cronogramas',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_cronogramas',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_administradores',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'visualizar_usuarios',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'visualizar_permissoes',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_permissoes',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_tratamentos_diferenciados',
            'descricao' => "permissão"
        ]);//21
        Permissao::create([
            'nome' => 'gerenciar_linguas',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_sistemas',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_modalidades_de_ensinos',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_documentos_para_upload',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_turnos',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_grupos',
            'descricao' => "permissão"
        ]);//27
        Permissao::create([
            'nome' => 'gerenciar_tipos_de_unidades',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_unidades',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_vagas',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_turnos',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'cadastrar_visualizar_motivos_indeferimentos',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'atualizar_deletar_motivos_indeferimentos',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_status',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_redes_ensinos',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_instituicoes_ensino',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'gerenciar_usuarios_permissoes',
            'descricao' => "permissão"
        ]);//37
        Permissao::create([
            'nome' => 'gerenciar_usuarios_permissoes_cronogramas',
            'descricao' => "permissão"
        ]);
        Permissao::create([
            'nome' => 'acesso_mestre',
            'descricao' => "O usuário com esta permissão pode logar como qualquer usuário"
        ]);                                                   
    }
}