<?php

namespace App\Imports;

use App\Distribuicao;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class DistribuicaoImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Distribuicao([
            'id_eventos' => $row[0],
            'id_tipos_distribuicoes' => $row[1],
            'id_setores' => $row[2],
            'controle' => $row[3],
            'local_prova' => $row[4],
            'colegio_prova' => $row[5],
            'sala_prova' => $row[6],
            'sequencia_prova' => $row[7],
            'inscricao' => $row[8],
            'cpf' => $row[9],
            'curso' => $row[10],
        ]);
    }
}
