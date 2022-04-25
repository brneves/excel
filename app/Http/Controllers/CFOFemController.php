<?php

namespace App\Http\Controllers;

use App\CFOFemi;
use App\Imports\CFOFemImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CFOFemController extends Controller
{
    public function index()
    {
        $femininos = CFOFemi::all();
        return view('cfo-femi', compact('femininos'));
    }

    public function store(Request $request)
    {
        Excel::import(new CFOFemImport(), $request->file('arquivo'));
        return redirect()->route('cfo-femi');
    }

    public static function updateVaga($idInscricao, $idVaga)
    {
        $femi = CFOFemi::find($idInscricao);

        $femi->update([
            'vaga_nova' => $idVaga,
            'vaga_final_nova' => $idVaga
        ]);
    }
}
