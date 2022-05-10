<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SetorEvento extends Model
{
    protected $table = 'setores_eventos';

    protected $fillable = [
        'id_eventos',
        'id_setores',
        'id_tipos_distribuicoes',
        'qtd_salas',
        'primeira_sala',
        'codigo'
    ];


}
