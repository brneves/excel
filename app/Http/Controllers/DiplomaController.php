<?php

namespace App\Http\Controllers;

use App\Diploma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DiplomaController extends Controller
{

    protected $diploma;

    public function __construct(Diploma $diploma)
    {
        $this->diploma = $diploma;
    }


    public function hash()
    {
        set_time_limit(0);

        $diplomas = $this->diploma->all();

        foreach ($diplomas as $diploma) {
            echo "UPDATE diploma SET hash = '" . Hash::make($diploma->cpf) . "' WHERE cpf = '{$diploma->cpf}';<br>";
        }
    }
}
