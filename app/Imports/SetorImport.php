<?php

namespace App\Imports;

use App\Setor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class SetorImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Setor([
            'id_setores' => $row[0],
            'cod_local' => $row[1],
            'local' => $row[2],
            'codigo' => $row[3],
            'nome' => $row[4],
            'endereco' => $row[5],
            'numero' => $row[6],
            'bairro' => $row[7],
            'cidade' => $row[8],
            'uf' => $row[9],
            'cep' => $row[10],
            'qtd_salas' => $row[11],
            'qtd_salas_utilizadas' => $row[12]
        ]);
    }
}
