<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('status');

            $table->integer('type');
            //1.Beneficiarios|2.Actividades|3.Manual
            $table->integer('metric');
            //1.Descriptiva|2.Porcentual|3.Monetaria|4.Númerica

            $table->decimal('goal',10,2)->nullable();
            $table->decimal('accumulated',10,2)->nullable();
            $table->decimal('percentage',10,2)->nullable();

            $table->unsignedBigInteger('id_proyecto');
            $table->foreign('id_proyecto')->references('id')->on('projects')->onDelete('cascade');

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
        Schema::dropIfExists('indicators');
    }
}
