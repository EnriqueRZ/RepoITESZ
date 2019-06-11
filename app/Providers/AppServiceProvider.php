<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Carrera;
use App\Tipo_Usuario;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        $carreras = Carrera::all();
        View::share('carreras', $carreras);
        $tipo_usuarios = Tipo_Usuario::all();
        View::share('tipo_usuarios', $tipo_usuarios);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
