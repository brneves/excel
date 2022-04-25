<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    public $timestamps = false;

    protected $table = 'musica';

    protected $primaryKey = 'id_inscricoes';

    protected $fillable = [
        'id_inscricoes',
        'nome',
        'cpf',
        'id_vagas_eventos',
        'id_sistema_vaga_v1',
        'id_vagas_eventos_segunda_opcao',
        'id_sistema_vagas_v2',
        'id_vagas_eventos_final',
        'nota_teste_aptidao',
        'status'
    ];
}
