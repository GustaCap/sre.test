<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id');
            /**
             * Relacion publicacion -> usuario
             */
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            /**
             * Codigo generado por una funcion. 10 caracteres
             */
            $table->string('codigoPublicacion')->unique();
            /**
             * Tipo de propiedad: para alquilar o vender
             */
            $table->string('tipoPropiedad');
            $table->string('images');


            /**Tipo de propiedad
             * Commercial
             * -Office
             * -Shop
             * Residential
             * -apartment
             * -apartment building
             * -condominium
             * -single family
             *
            */
            $table->string('dirección');
            $table->integer('mtsCuadrados');
            $table->string('nrohabitaciones');
            $table->string('nrocamas');
            $table->string('tipoCamas');
            /**Tipo de camas
             * 1. individual
             * 2. doble
             * 3. litera
             * 4. queen
             * 5. king
             */

            $table->string('nrobaños');
            $table->string('nrohuespedes');
            $table->string('internet');
            $table->string('wifi');
            $table->string('cocina');
            $table->string('calefaccion');
            $table->string('aa');
            $table->string('jacuzzi');
            $table->string('garage');
            $table->string('alarmaIncendio');
            $table->string('salidaEmergencia');
            $table->string('telefonoFijo');
            $table->string('aguaCaliente');
            $table->string('piscina');
            $table->string('areasVerdes');
            $table->string('restaurant');
            $table->string('playaPrivada');
            $table->string('otros');
            $table->string('observaciones');

            $table->integer('id_plan')->unsigned()->nullable();
            $table->foreign('id_plan')->references('id')->on('planes')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('publicaciones');
    }
}
