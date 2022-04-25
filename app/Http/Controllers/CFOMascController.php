<?php

namespace App\Http\Controllers;

use App\CFOMasc;
use App\Imports\CFOMasImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class CFOMascController extends Controller
{

    public function index()
    {
        $masculinos = CFOMasc::all();
        return view('cfo-masc', compact('masculinos'));
    }

    public function store(Request $request)
    {
        Excel::import(new CFOMasImport(), $request->file('arquivo'));
        return redirect()->route('cfo-masc');
    }

    public static function updateVaga($idInscricao, $idVaga)
    {
        $masc = CFOMasc::find($idInscricao);

        $masc->update([
            'vaga_nova' => $idVaga,
            'vaga_final_nova' => $idVaga
        ]);
    }


}
