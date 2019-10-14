<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColaboradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombrecolaborador');
            $table->string('apellidocolaborador');
            $table->string('direccioncolaborador');
            $table->bigInteger('telefonocolaborador');
            $table->string('emailcolaborador');
            $table->string('genero');
            $table->date('fechanacimiento');
            $table->string('nivelacademico');
            $table->string('titulo');

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
        Schema::dropIfExists('colaboradores');
    }
}
