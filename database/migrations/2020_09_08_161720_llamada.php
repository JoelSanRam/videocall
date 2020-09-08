<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Llamada extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('llamadas', function (Blueprint $table) {
      $table->id();
      $table->string('duracion');
      $table->date('fecha');

      $table->foreignId('id_usuario')
        ->references('id')
        ->on('usuarios');

      $table->foreignId('id_medico')
        ->references('id')
        ->on('medicos');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('llamadas');
  }
}
