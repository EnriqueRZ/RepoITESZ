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

Route::view('/acerca-de', 'acercade')->name('acercade');
Route::view('/enrique-r', 'cvs/cv-jerz')->name('cv-jerz');
Route::view('/carlos-m', 'cvs/cv-cimg')->name('cv-cimg');
Route::view('/mariano-g', 'cvs/cv-mgc')->name('cv-mgc');

Route::view('/pantalla1', 'pantallas/pantalla1')->name('pantalla1');