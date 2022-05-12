<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalaSetor extends Model
{
    protected $table = 'salas_setores';

    protected $primaryKey = 'id_salas_setores';

    protected $fillable = [
        'id_setores_eventos',
        'sala',
        'qtd_candidatos'
    ];
}
