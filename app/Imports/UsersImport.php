<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{

    public function model(array $row)
    {
        return new User([
            'id' => $row[0],
            'name' => $row[1],
            'email' => $row[2],
            'cpf' => $row[3],
            'password' => $row[4],
            'sexo' =>$row[5] ,
            'data_nascimento' => $row[6],

            'dco_tipo' => ($row[7] == '1' ? 'RG' : ($row[7] == '2' ? 'CNH' : 'Passaporte')),
            'dco_numero' => $row[8],
            'dco_expedidor' => $row[9],
            'dco_data_expedicao' => $row[10],
            'dco_naturalidade' => $row[11],
            'dco_uf' => $row[12],
            'dco_nacionalidade' => $row[13],

            'end_cep' => $row[14],
            'end_endereco' => $row[15],
            'end_complemento' => $row[16],
            'end_numero' => $row[17],
            'end_bairro' => $row[18],
            'end_cidade' => $row[19],

            'telefone1' => $row[20],
            'telefone2' => $row[21],

            'dcg_mae' => $row[22],
            'dcg_pai' => $row[23],

            'dcg_titulo_eleitor_numero' => $row[24],
            'dcg_titulo_eleitor_zona' => $row[25],
            'dcg_titulo_eleitor_secao' => $row[26],
            'dcg_titulo_eleitor_data' => $row[27],

            'dcg_numero_reservista' => $row[28],
            'dcg_expedidor_reservista' => $row[29],
            'dcg_data_reservista' => $row[30],
            'dcg_uf_reservista' => $row[31],
        ]);

    }

}
