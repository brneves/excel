<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    protected $table = 'diploma';

    protected $fillable = [
        'nome',
        'codigo',
        'cpf',
        'curso',
        'centro',
        'data',
        'hash',
        'termo'
    ];

}
