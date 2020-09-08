<?php

use Illuminate\Support\Facades\Route;

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
