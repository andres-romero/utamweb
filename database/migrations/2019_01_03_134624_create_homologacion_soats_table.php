<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomologacionSoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homologacion_soats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Codigo');
            $table->string('Nombre');
            $table->float('Grupo_quirur_valor',30,2);
            $table->integer('Grupo_quirur_liquidacion');
            $table->string('Grupo');
            $table->integer('Capitulo');
            $table->integer('Articulo');
            $table->integer('Numero_seccion');
            $table->string('Seccion');
            $table->string('Titulo');
            $table->string('Homologacion_cups');
            $table->string('Estado');
            $table->boolean('Zona_especial_15%');
            $table->boolean('Zona_especial_25%');

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
        Schema::dropIfExists('homologacion_soats');
    }
}
