<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CFOFemi extends Model
{
    protected $table = 'cfo_femi';

    protected $primaryKey = 'id_inscricoes';

    protected $fillable = [
        'id_inscricoes','nome','cpf', 'id_vagas_eventos', 'id_vagas_eventos_final', 'vaga_nova', 'vaga_final_nova'
    ];

    public $timestamps = false;
}
