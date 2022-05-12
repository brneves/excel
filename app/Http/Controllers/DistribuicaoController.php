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
        $setoresEventos = SetorEvento::all();
        $distribuicoes = Distribuicao::all();
        return view('distribuicao-up', compact('distribuicoes', 'setoresEventos'));
    }

    public function store(Request $request)
    {
        ini_set('memory_limit', '-1');
        Excel::import(new DistribuicaoImport(), $request->file('arquivo'));
        return redirect()->route('distribuicao-up');
    }

}
