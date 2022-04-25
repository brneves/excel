<?php

namespace App\Imports;

use App\Musica;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class MusicaImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Musica([
            'id_inscricoes' => $row[2],
            'nome' => $row[0],
            'cpf' => $row[1],
            'id_vagas_eventos' => $row[3],
            'id_sistema_vaga_v1' => $row[4],
            'id_vagas_eventos_segunda_opcao' => $row[5],
            'id_sistema_vagas_v2' => $row[6],
            'id_vagas_eventos_final' => $row[7],
            'nota_teste_aptidao' => $row[8],
            'status' => $row[9],
        ]);
    }
}
