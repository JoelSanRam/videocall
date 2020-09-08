<?php

use Illuminate\Support\Facades\Route;

//FrontEnd
Route::get('/', 'InicioController@index')->name('inicio');
Route::get('/ingresar', 'InicioController@ingresar')->name('ingresar');
Route::get('/llamada', 'InicioController@llamada')->name('llamada');
Route::get('/perfil', 'InicioController@perfil')->name('perfil');
Route::get('/recomendaciones', 'InicioController@recomendaciones')->name('recomendaciones');
Route::get('/registro', 'InicioController@registro')->name('registro');
Route::get('/sintoma', 'InicioController@sintoma')->name('sintomas');




//Administrador
Route::get('/administrar', 'AdministradorController@index')->name('administrar');
Route::resource('/administrar/enfermedadSintoma', 'EnfermedadSintomaController')->names('administrar/enfermedad-sintoma');
Route::resource('administrar/llamada', 'LlamadaController')->names('administrar/llamada');
Route::resource('/administrar/medico', 'MedicoController')->names('administrar/medico');
Route::resource('/administrar/pago', 'PagoController')->names('administrar/pago');
Route::resource('/administrar/tipoUsuario', 'TipoUsuarioController')->names('administrar/tipo-usuario');
Route::resource('/administrar/usuario', 'UsuarioController')->names('administrar/usuario');
