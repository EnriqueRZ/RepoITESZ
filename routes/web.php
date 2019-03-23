<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
    RUTAS PARA ARCHIVOS DE INFORMACIÓN
    CURRICULUMS VITAE Y ACERCA DE
*/
Route::view('/acerca-de', 'acercade')->name('acercade');
Route::view('/enrique-r', 'cvs/cv-jerz')->name('cv-jerz');
Route::view('/carlos-m', 'cvs/cv-cimg')->name('cv-cimg');
Route::view('/mariano-g', 'cvs/cv-mgc')->name('cv-mgc');

/*  
    RUTAS PARA PANTALLAS PRINCIPALES
    DENTRO DE LA APLICACIÓN
*/
Route::view('/principal', 'pantallas/principal')->name('principal');
Route::view('/view-semestres', 'pantallas/view-semestres')->name('view-semestres');
Route::view('/view-informacion', 'pantallas/view-informacion')->name('view-informacion');
Route::view('/view-addmaterial', 'pantallas/view-addmaterial1')->name('view-addmaterial');