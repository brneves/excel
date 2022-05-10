<?php

namespace App\Http\Controllers;

use App\SalaSetor;
use App\Setor;
use Illuminate\Http\Request;

class DistribuicaoController extends Controller
{
    public function index()
    {
        $setores = Setor::all();

        $salasSetores = SalaSetor::all();

        return view('distribuicao', compact('setores', 'salasSetores'));


    }
}
