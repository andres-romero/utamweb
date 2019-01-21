<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCie10sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cie10s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Codigo');
            $table->string('Descripcion');
            $table->string('Sexo');
            $table->integer('Limite_inferior');
            $table->integer('Limite_superior');
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
        Schema::dropIfExists('cie10s');
    }
}
