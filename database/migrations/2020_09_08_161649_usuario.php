<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('usuarios', function (Blueprint $table) {
      $table->id();
      $table->string('sexo');
      $table->string('contrasenia');
      $table->string('telefono');
      $table->string('status');
      $table->string('nombre');
      $table->string('materno');
      $table->string('paterno');
      $table->string('correo');

      $table->foreignId('id_tipo')
        ->references('id')
        ->on('tipo_usuarios');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('usuario');
  }
}
