<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'id',
        'email',
        'password',
        'id_tipo_usuario',
        'id_carrera',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function carrera($id_carrera){
        return \DB::table('carrera')
            ->select('id')
            ->where('nombre_carrera', $id_carrera)
            ->first();
    }

    public static function tipoUsuario($id_tipoUsuario){
        return DB::table('tipo_usario')
            ->select('id')
            ->where('nombre_carrera', $id_tipoUsuario)
            ->first();
    }
}
