<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalMusica extends Model
{

    protected $fillable = [
        'id_inscricao',
        'nome',
        'local_prova',
        'id_local_prova',
        'local_curso',
        'id_unidade_curso',
        'cod_unidade_vaga',
        'id_vagas_eventos',
    ];

}
