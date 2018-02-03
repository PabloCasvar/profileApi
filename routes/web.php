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

Route::get('/profile/canales', 'CanalController@index');

Route::get('/profile/cursos', 'CursoController@index');

Route::get('/profile/trabajos', 'TrabajoController@index');
