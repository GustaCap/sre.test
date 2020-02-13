<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoSresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_sres', function (Blueprint $table) {
            $table->increments('id');
            /**
             * Tipos: proveedor, beneficiario
             */
            $table->string('tipo');
            $table->string('name_empresa');
            $table->string('rif_dni');
            /**
             * Razon social: ingeniero, electricista, o si es una empresa seria limpiesa, reparacion etc.
             */
            $table->string('razon_social');
            /**
             * Codigo generado por una funcion... 6caracteres
             */
            $table->string('codigo_equipo_sres')->unique();

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
        Schema::dropIfExists('equipo_sres');
    }
}
