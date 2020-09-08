<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{

  public function index()
  {
    return view('front.index');
  }

  public function ingresar()
  {
    return view('front.login');
  }

  public function llamada()
  {
    return view('front.llamada');
  }

  public function perfil()
  {
    return view('front.perfil');
  }

  public function recomendaciones()
  {
    return view('front.recomendacion');
  }

  public function registro()
  {
    return view('front.registro');
  }

  public function sintoma()
  {
    return view('front.sintoma');
  }
}
