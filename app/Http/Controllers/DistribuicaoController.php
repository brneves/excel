<?php

namespace App\Http\Controllers;

use App\Distribuicao;
use App\Imports\DistribuicaoImport;
use App\SalaSetor;
use App\Setor;
use App\SetorEvento;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DistribuicaoController extends Controller
{
    public function index()
    {
        $setores = Setor::all();

        $setoresEventos = SetorEvento::all();

        return view('distribuicao', compact('setores', 'setoresEventos'));


    }

    public function up()
    {
        $distribuicoes = Distribuicao::all();
        return view('distribuicao-up', compact('distribuicoes'));
    }

    public function store(Request $request)
    {
        Excel::import(new DistribuicaoImport(), $request->file('arquivo'));
        return redirect()->route('distribuicao-up');
    }

}
