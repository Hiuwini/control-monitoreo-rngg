<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombrebeneficiario');
            $table->string('apellidobeneficiario');
            $table->string('genero');
            $table->boolean('estado');
            $table->string('rangoedad');
            $table->string('nombreubicacion');
            $table->string('dpicui');
            $table->bigInteger('telefono');
            $table->string('emailbeneficiario');
            $table->string('indicador');
            $table->string('tipobeneficiario');

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
        Schema::dropIfExists('beneficiarios');
    }
}
