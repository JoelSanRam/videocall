<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Historial extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('historial', function (Blueprint $table) {
      $table->id();

      $table->foreignId('id_usuario')
        ->references('id')
        ->on('usuarios');

      $table->foreignId('id_enfermedad_sintomas')
        ->references('id')
        ->on('enfermedad_sintomas');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('historial');
  }
}
