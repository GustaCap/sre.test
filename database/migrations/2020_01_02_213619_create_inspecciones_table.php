<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspecciones', function (Blueprint $table) {
            $table->increments('id');
            /**
             * Codigo de 10 digitos
             */
            $table->string('codigoInspeccion')->unique();
            /**
             * Relacion: inspeccion -> equipo
             */
            $table->integer('id_equipoSre')->unsigned();
            $table->foreign('id_equipoSre')->references('id')->on('equipoSre')->onUpdate('cascade')->onDelete('cascade');

            $table->string('observaciones');
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
        Schema::dropIfExists('inspecciones');
    }
}
