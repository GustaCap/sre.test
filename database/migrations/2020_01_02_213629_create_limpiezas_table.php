<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLimpiezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('limpiezas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigoLimpieza')->unique();

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
        Schema::dropIfExists('limpiezas');
    }
}
