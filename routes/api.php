<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::resource('v1/usuarios','UsuariosController')->middleware('cors');

Route::resource('v1/registro','RegistroController')->middleware('cors');


Route::resource('v1/licencia','licenciasController')->middleware('cors');



