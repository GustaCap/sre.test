<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReparacionSresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparacion_sres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('responsable');

            /**
             * Relaciones
             */
            $table->integer('id_equipo_sres')->unsigned();
            $table->foreign('id_equipo_sres')->references('id')->on('equipo_sres')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('reparacion_sres');
    }
}
