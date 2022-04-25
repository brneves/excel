<?php

namespace App\Http\Controllers;

use App\Imports\MusicaImport;
use App\Musica;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MusicaController extends Controller
{
    public function index()
    {
        $musicas = Musica::all();
        return view('musica', compact('musicas'));
    }

    public function store(Request $request)
    {
        Excel::import(new MusicaImport(), $request->file('arquivo'));
        return redirect()->route('musica');
    }

    public static function mudaVaga($idInscricao)
    {
        $inscricao = Musica::find($idInscricao);

        if ($inscricao->nota_teste_aptidao >= 6){
            $inscricao->update([
                'id_vagas_eventos_final' => $inscricao->id_vagas_eventos
            ]);
        } elseif($inscricao->status == 1) {
            $inscricao->update([
                'id_vagas_eventos_final' => $inscricao->id_vagas_eventos_segunda_opcao
            ]);
        } elseif($inscricao->status == 2){
            $inscricao->update([
                'id_vagas_eventos_final' => null
            ]);
        } else {
            $inscricao->update([
                'id_vagas_eventos_final' => $inscricao->id_vagas_eventos_segunda_opcao
            ]);
        }

    }

}
