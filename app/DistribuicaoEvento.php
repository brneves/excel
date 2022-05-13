<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistribuicaoEvento extends Model
{
    protected $table = 'distribuicao_eventos';

    protected $primaryKey = 'id_distribuicao_eventos';

    protected $fillable = [
        'id_salas_setores',
        'id_tipos_distribuicao',
        'id_inscricoes',
        'controle',
        'sequencia_prova',
    ];
}
