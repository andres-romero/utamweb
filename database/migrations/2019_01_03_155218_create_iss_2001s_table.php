<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIss2001sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iss_2001s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Codigo');
            $table->string('Descripcion');
            $table->string('Homologacion_cups');
            $table->string('Descripcion_cups');
            $table->integer('Uvr')->nullable();
            $table->integer('Porcirug')->nullable();
            $table->integer('cirujano')->nullable();
            $table->integer('Ciru_zona_especial')->nullable();
            $table->integer('Porce_anest')->nullable();
            $table->integer('Anestesiologo')->nullable();
            $table->integer('Anes_zon_especial')->nullable();
            $table->integer('Porce_ayud')->nullable();
            $table->integer('Ayudantia')->nullable();
            $table->integer('Salas')->nullable();
            $table->integer('Materiales')->nullable();
            $table->integer('Valor_neto');
            $table->integer('Valor_zona_esp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iss_2001s');
    }
}
