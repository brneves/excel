<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        //'id_permissaos',
        'cpf',
        'email',
        'password',
        'foto',

        'sexo',
        'cor_pele',
        'data_nascimento',

        'dco_tipo',
        'dco_numero',
        'dco_expedidor',
        'dco_data_expedicao',
        'dco_naturalidade',
        'dco_uf',
        'dco_nacionalidade',

        'end_cep',
        'end_endereco',
        'end_complemento',
        'end_numero',
        'end_bairro',
        'end_cidade',
        'end_estado',

        'telefone1',
        'telefone2',

        'dcg_mae',
        'dcg_pai',

        'dcg_titulo_eleitor_numero',
        'dcg_titulo_eleitor_zona',
        'dcg_titulo_eleitor_secao',
        'dcg_titulo_eleitor_data',

        'dcg_numero_reservista',
        'dcg_expedidor_reservista',
        'dcg_data_reservista',
        'dcg_uf_reservista',

        'nat_cidade',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
