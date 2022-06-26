<?php

namespace App\Http\Controllers;

use App\DistribuicaoEad;
use Illuminate\Http\Request;

class DistrituicaoEadController extends Controller
{
    public function index()
    {
        $distribuicoes = DistribuicaoEad::all();
        return view('distribuicaoead', compact('distribuicoes'));
    }

}
