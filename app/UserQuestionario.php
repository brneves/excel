<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserQuestionario extends Model
{
    protected $table = 'user_questionarios';
    protected $primaryKey = 'id_users_questionarios';
    protected $fillable = [
        'id_users',
        'id_questionarios',
        'created_at',
        'updated_at',
        'ok'
    ];

}
