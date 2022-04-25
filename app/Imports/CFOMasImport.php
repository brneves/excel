<?php

namespace App\Imports;

use App\CFOMasc;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class CFOMasImport implements ToModel
{

    public function model(array $row)
    {
        return new CFOMasc([
            'id_inscricoes' => $row[2],
            'nome' => $row[0],
            'cpf' => $row[1],
            'id_vagas_eventos' => $row[3],
            'id_vagas_eventos_final' => $row[4],
        ]);
    }
}
