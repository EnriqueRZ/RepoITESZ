<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $table = 'material_didactico';

    protected $fillable = [
        'id',
        'nombre',
        'tipo',
        'recurso',
        'link',
        'id_materia',
    ];
}