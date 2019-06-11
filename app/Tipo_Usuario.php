<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Usuario extends Model
{
    public $table = 'tipo_usuario';
    
    protected $fillable = [
        'id',
        'nombre_tipo_usuario',
    ];

}
