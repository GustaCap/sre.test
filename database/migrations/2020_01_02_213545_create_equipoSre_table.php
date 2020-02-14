<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoSreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipoSre', function (Blueprint $table) {
            $table->increments('id');
            /**
             * Codigo generado por una funcion... 10caracteres
             */
            $table->string('codigoEquipoSre')->unique();
            /**
             * Tipos: proveedor, beneficiario
             */
            $table->string('tipo');
            $table->string('denominacion');
            $table->string('rifDni');
            /**
             * Razon social: ingeniero, electricista, o si es una empresa seria limpiesa, reparacion etc.
             */
            $table->string('razonSocial');



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
        Schema::dropIfExists('equipoSre');
    }
}
