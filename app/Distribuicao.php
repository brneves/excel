<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribuicao extends Model
{
    protected $table = 'distribuicoes';

    protected $fillable = [
        'id_eventos',
        'id_tipos_distribuicoes',
        'id_setores',
        'controle',
        'local_prova',
        'colegio_prova',
        'sala_prova',
        'sequencia_prova',
        'inscricao',
        'cpf',
        'curso',
    ];

}
