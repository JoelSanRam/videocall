<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnfermedadSintoma extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('enfermedad_sintomas', function (Blueprint $table) {
      $table->id();

      $table->foreignId('id_sugerencia')
        ->references('id')
        ->on('sugerencias');

      $table->foreignId('id_sintoma')
        ->references('id')
        ->on('sintomas');

      $table->foreignId('id_enfermedad')
        ->references('id')
        ->on('enfermedades');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('enfermedad_sintomas');
  }
}
