<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public $table = 'carrera';

    protected $fillable = [
        'id',
        'nombre',
        'plan_estudios',
        'cantidad_semestre',
    ];
}
