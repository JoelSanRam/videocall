<?php

use App\Http\Controllers\EnfermedadSintomaController;
use Illuminate\Support\Facades\Route;

//FrontEnd
Route::get('/', function () {
  return view('front.index');
});


//Administrador
Route::get('/administrar', function () {
  return view('admin.index');
});

Route::resource('/enfermedadSintoma', 'EnfermedadSintomaController')->names('enfermedad-sintoma');
Route::resource('llamada', 'LlamadaController')->names('llamada');
Route::resource('/medico', 'MedicoController')->names('medico');
Route::resource('/pago', 'PagoController')->names('pago');
Route::resource('/tipoUsuario', 'TipoUsuarioController')->names('tipo-usuario');
Route::resource('/usuario', 'UsuarioController')->names('usuario');
