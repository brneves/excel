<?php

namespace App\Http\Controllers;

use App\Imports\LocalMusicaImport;
use App\LocalMusica;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LocalMusicaController extends Controller
{
    public function index()
    {
        $locais = LocalMusica::all();
        return view('locais-musica', compact('locais'));
    }

    public function store(Request $request)
    {
        Excel::import(new LocalMusicaImport(), $request->file('arquivo'));
        return redirect()->route('local-musica');
    }
}
