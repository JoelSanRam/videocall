<?php

use Illuminate\Support\Facades\Route;

//FrontEnd
Route::get('/', function () {
  return view('front.index');
});


Route::get('/ingresar', function () {
  return view('front.login');
});

Route::get('/llamada', function () {
  return view('front.llamada');
});

Route::get('/perfil', function () {
  return view('front.perfil');
});

Route::get('/recomendaciones', function () {
  return view('front.recomendacion');
});

Route::get('/registro', function () {
  return view('front.registro');
});

Route::get('/sintoma', function () {
  return view('front.sintoma');
});

Route::get('/administrar', function () {
  return view('admin.index');
});


//Administrador
Route::resource('/enfermedadSintoma', 'EnfermedadSintomaController')->names('enfermedad-sintoma');
Route::resource('llamada', 'LlamadaController')->names('llamada');
Route::resource('/medico', 'MedicoController')->names('medico');
Route::resource('/pago', 'PagoController')->names('pago');
Route::resource('/tipoUsuario', 'TipoUsuarioController')->names('tipo-usuario');
Route::resource('/usuario', 'UsuarioController')->names('usuario');
