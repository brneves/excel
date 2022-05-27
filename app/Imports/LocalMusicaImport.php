<?php

namespace App\Imports;

use App\LocalMusica;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class LocalMusicaImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new LocalMusica([
            'id_inscricao' => $row[0],
            'nome' => $row[1],
            'local_prova' => $row[2],
            'id_local_prova' => $row[3],
            'local_curso' => $row[4],
            'id_unidade_curso' => $row[5],
            'cod_unidade_vaga' => $row[6],
            'id_vagas_eventos' => $row[7],
        ]);
    }
}
