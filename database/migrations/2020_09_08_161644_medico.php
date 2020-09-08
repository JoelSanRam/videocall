<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Medico extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('medicos', function (Blueprint $table) {
      $table->id();
      $table->string('nombre');
      $table->string('materno');
      $table->string('paterno');
      $table->string('sexo');
      $table->string('telefono');
      $table->string('correo');
      $table->string('contrasenia');
      $table->string('foto');
      $table->string('numero_cedula');
      $table->string('cedula');
      $table->string('titulo');
      $table->integer('status');

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
    Schema::dropIfExists('medico');
  }
}
