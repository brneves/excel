<?php

namespace App\Http\Controllers;

use App\Imports\SetorImport;
use App\Setor;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SetorController extends Controller
{
    public function index()
    {
        $setores = Setor::all();
        return view('setores', compact('setores'));
    }

    public function store(Request $request)
    {
        Excel::import(new SetorImport(), $request->file('arquivo'));
        return redirect()->route('setores');
    }

}
