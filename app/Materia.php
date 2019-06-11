<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $table = 'materia';

    protected $fillable = [
        'id',
        'nombre',
        'semestre',
        'id_carrera',
    ];
}