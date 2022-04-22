<?php

namespace App\Imports;

use App\Diploma;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class DiplomaImport implements ToModel
{


    public function model(array $row)
    {
        return new Diploma([
            'nome' => $row[0],
            'codigo' => $row[1],
            'cpf' => str_pad($row[2] , 11 , '0' , STR_PAD_LEFT),
            'curso' => $row[3],
            'centro' => $row[4],
            'data' => $row[5],
            'hash' => Hash::make($row[2]), //PEGAR O ID DO CPF
            'termo' => 1
        ]);
    }
}
