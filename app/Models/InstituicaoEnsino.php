<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstituicaoEnsino extends Model
{
    protected $table = 'instituicoes_ensinos';
    protected $primaryKey = 'id_instituicoes_ensinos';

    //campos que podem ser incluído informações no bd
    protected $fillable=[
        'id_instituicoes_ensinos',
        'id_redes_ensinos',
        'nome',
        'administracao',
        'codigo',
        'localizacao',
        'regiao',
        'id_municipios',
    ];
}
