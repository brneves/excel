<?php

namespace App\Imports;

use App\UserQuestionario;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class UserQuestionarioImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {

        ini_set('memory_limit', '-1');


        // 0 para repetidos e 1 para todos
        $ok = 0;
        /*
        $user = UserQuestionario::where('id_users', $row[1])->first();
        if ($user){
            return new UserQuestionario([
                'id_users_questionarios' => $row[0],
                'id_users' => $row[1],
                'id_questionarios' => $row[2],
                'created_at' => $row[3],
                'updated_at' => $row[4],
                'ok' => 0
            ]);
        }
        */


        /* CADASTRA TODOS INICIALMENTE */

        return new UserQuestionario([
            'id_users_questionarios' => $row[0],
            'id_users' => $row[1],
            'id_questionarios' => $row[2],
            'created_at' => $row[3],
            'updated_at' => $row[4],
            'ok' => $ok
        ]);



    }
}
