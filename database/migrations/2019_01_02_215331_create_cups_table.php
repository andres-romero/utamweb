<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Codigo');
            $table->string('Descripcion');
            $table->integer('Nivel');
            $table->string('Centro_de_costo');
            $table->string('Componente');
            $table->string('Seccion');
            $table->string('Descripcion_seccion');
            $table->integer('Capitulo');
            $table->string('Descripcion_capitulo');
            $table->integer('Grupo');
            $table->string('Descripcion_grupo');

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
        Schema::dropIfExists('cups');
    }
}
