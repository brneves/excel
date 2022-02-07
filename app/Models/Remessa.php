<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Remessa extends Model
{
    protected $fillable = [
        'arquivo',
        'data',
        'qtd_registro',
        'valor_total'
    ];


}
