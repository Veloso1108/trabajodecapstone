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

Route::get('/', 'PagesController@inicio');

Route::get('/profesores','PagesController@profesores')->name('profesor');

//visualizar la disponibilidad de un profesor mediante el mail
Route::get('/profesores/{idUsuario}','PagesController@dispoprofesores')->name('editar.dispoprofe');

Route::post('/profesores','PagesController@crear')->name('crearprofesor');

//ruta de como editar un profe
Route::get('/editar/{idUsuario}','PagesController@editarprofe')->name('editar.editarprofe');

Route::get('/salas', 'PagesController@salas')->name('sala');

Route::get('/disponibilidades', 'PagesController@disponibilidades')->name('disponibilidad');