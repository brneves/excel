<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setores';

    protected $primaryKey = 'id_setores';

    protected $fillable = [
        'id_setores',
        'cod_local',
        'local',
        'codigo',
        'nome',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'qtd_salas',
        'qtd_salas_utilizadas'
    ];

    public $timestamps = false;

}
