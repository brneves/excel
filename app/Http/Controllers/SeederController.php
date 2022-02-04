<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeederController extends Controller
{

    public function index()
    {
        return view('enviar');
    }

    public function seed(Request $request)
    {
        ini_set('memory_limit', '-1');

        $linhas = explode("\r\n", $request->inserts);

        foreach ($linhas as $linha){

            $exp1 = explode("(", $linha);
            $exp2 = explode(")", $exp1[1]);
            $exp3 = explode(");", $exp1[2]);

            $colunas = explode(", ", $exp2[0]);

            $val = explode(", '", $exp3[0]);
            foreach ($val as $v){
                $numeros[] = preg_replace("/[^0-9]/", "-", $v);
                $escapandoVirgulas[] = str_replace(", ", "|", $v);
            }

            $num = explode("-", $numeros[0]);

            $faker = Factory::create('pt_BR');
            for ($i = 0; $i <= 20; $i++){
                $dados[] = $faker->name('female');
            }

            dd($num, $dados);

            dd($escapandoVirgulas, $exp3, $val, $numeros);

            //$escapandoVirgulas = str_replace(", ", "|", $exp3);



            $valores = explode(", ", $exp3[0]);

            dd($colunas, $valores, $exp3);

            echo "\App\Models\{$request->model}::create([";

            for($i = 1; $i <= count($valores); $i++){
                echo "{$colunas[$i-1]} => {$valores[$i-1]},";
            }

            echo "]);\r\n";

        }
    }


}
