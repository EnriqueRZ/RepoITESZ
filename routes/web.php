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

//Auth::routes();
/* 
    RUTAS PARA LA PARTE DE
    LOGIN Y REGISTRO
*/
 
Route::get('/login', function () {
    return view('auth.login');
});

/** 
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('register', 'Auth\RegisterController@register')->name('register');
*/
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/register', function () {
    return view('auth.register');
});

//Route::post('register', 'Auth\UserController@register')->name('register');

Route::resource('users', 'Auth\UserController');
	
Route::get('/app', ['as' => 'layouts.app', 'uses' => 'CarreraController@index']);
Route::get('/principal', ['as' => 'pantallas.principal', 'uses' => 'CarreraController@index']);

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
Route::view('/primer', 'pantallas/primerpantalla')->name('primer');

//Route::view('/view-semestres', 'pantallas/view-semestres')->name('view-semestres');
Route::get('Controller\CarreraContoller\index\{carrera};', 'CarreraController@index')->name('view-semestres');
//ejemplo con dos parametros Route::get('Controller\MaterialContoller\index\{carrera}\{semestre};', 'MaterialController@index')->name('view-material');
Route::get('Controller\MaterialContoller\index\{id_materia}\{name};', 'MaterialController@index')->name('view-material');
Route::get('Controller\MaterialContoller\delete\{id_material}\{id_materia}\{name};', 'MaterialController@delete')->name('view-material-delete');

Route::get('Controller\MaterialContoller\delete\{id_materia}\{name};', 'MaterialController@add')->name('view-add');
Route::post('addMaterial', 'MaterialController@addMaterial')->name('addMaterial');
Route::get('Controller\MaterialContoller\setIdMateria\{id_materia};', 'MaterialController@setIdMateria')->name('setIdMateria');
Route::get('/downloadFile/{id_material}' , 'MaterialController@downloadFile')->name('download');
Route::get('Controller\MaterialContoller\edit\{material};' , 'MaterialController@edit')->name('edit');
Route::post('updateMaterial/{id}', 'MaterialController@update')->name('updateMaterial');



//Materia
Route::get('byCarrera/{id}' , 'MateriaController@byCarrera')->name('byCarrera');
Route::get('index/{id}/{semestre?}' , 'MateriaController@index')->name('index');
Route::get('admin/{id}/{semestre?}' , 'MateriaController@admin')->name('admin');
Route::post('addMateria', 'MateriaController@addMateria')->name('addMateria');
Route::get('delete/{id_materia}' , 'MateriaController@delete')->name('deleteM');
Route::get('edit/{id}' , 'MateriaController@edit')->name('edit');
//Fin

Route::view('/view-informacion', 'pantallas/view-informacion')->name('view-informacion');
Route::view('/view-addmaterial', 'pantallas/view-addmaterial1')->name('view-addmaterial');

Route::view('/administracion', 'pantallas/administracion')->name('view-admin');