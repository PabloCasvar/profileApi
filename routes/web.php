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

Route::get('/api/perfil/trabajos', 'TrabajoController@index');

Route::get('/api/perfil/trabajos/actividades', 'TrabajoController@get_actividades');

Route::get('/api/perfil/escuelas', 'EscuelaController@index');

Route::get('/api/perfil/cursos', 'CursoController@index');

Route::get('/api/perfil/canales', 'CanalController@index');

Route::get('/api/perfil/fotografias', 'FotografiaController@index');




