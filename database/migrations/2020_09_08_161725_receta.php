<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Receta extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('recetas', function (Blueprint $table) {
      $table->id();
      $table->integer('status');
      $table->text('receta');

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
    Schema::dropIfExists('recetas');
  }
}
