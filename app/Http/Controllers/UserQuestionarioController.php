<?php

namespace App\Http\Controllers;

use App\Imports\UserQuestionarioImport;
use App\UserQuestionario;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserQuestionarioController extends Controller
{
    public function index()
    {

        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 180);

        $usuarios = UserQuestionario::all();

        $repetidos = [];

        /*
        for ($i = 1; $i <= count($usuarios); $i++){

            $user = UserQuestionario::where('id_users', $usuarios[$i]['id_users'])->orderBy('created_at', 'desc')->get();
            if (count($user) > 1){
                $i = 1;
                foreach ($user as $item) {
                    if ($i > 1)
                        $item->update(['ok' => 1]);
                    $i++;
                }
            }
        }
        */


        return view('enviar-user-quest', compact('usuarios'));
    }

    public function store(Request $request)
    {
        ini_set('memory_limit', '-1');

        Excel::import(new UserQuestionarioImport(), $request->file('arquivo'));

        return redirect()->route('user-questionario');
    }
}
