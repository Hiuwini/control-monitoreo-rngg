<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTGestorToBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beneficiarios', function (Blueprint $table) {
            // Integrando el tipo de gestor(Grupo Gestor) al que pertenece el beneficiario. (si lo fuera)
            $table->bigInteger('id_tipogestor')->unsigned()->nullable();
            $table->foreign('id_tipogestor')->references('id')->on('tipogestores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beneficiarios', function (Blueprint $table) {
            //
        });
    }
}
