<?php

namespace App\Http\Controllers;

use App\Diploma;
use App\Imports\DiplomaImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;


class DiplomaController extends Controller
{

    protected $diploma;

    public function __construct(Diploma $diploma)
    {
        $this->diploma = $diploma;
    }

    public function index()
    {
        $diplomas = $this->diploma->all();
        return view('enviar-diploma', compact('diplomas'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        ini_set('memory_limit', '-1');

        Excel::import(new DiplomaImport(), $request->file('arquivo'));

        return redirect()->route('diploma');
    }

    public function hash()
    {
        set_time_limit(0);

        $diplomas = $this->diploma->all();

        foreach ($diplomas as $diploma) {
            echo "UPDATE diploma SET termo = 1 WHERE cpf = '{$diploma->cpf}';<br>";
        }
    }
}
