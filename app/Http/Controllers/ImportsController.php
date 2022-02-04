<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportsController extends Controller
{
    public function index()
    {
        ini_set('memory_limit', -1);
        //(new UsersImport)->import('usuarios.xlsx', null, \Maatwebsite\Excel\Excel::XLSX);
        Excel::import(new UsersImport, 'usuarios - 1.xlsx');
        return view('enviar');
    }

    public function importUsers()
    {

        //Excel::import(new UsersImport(),request()->file('arquivo'));

        return redirect('importar');
    }

}
