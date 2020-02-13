<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forsales', function (Blueprint $table) {
            $table->increments('id');
            /**
             * Codigo generado por una funcion. 6 caracteres
             */
            $table->string('codigo_forsales')->unique();
            $table->string('Dirección');
            $table->string('tipo_propiedad');
            /**Tipo de propiedad
             * Commercial
             * -Office
             * -Shop
             * Residential
             * -apartment
             * -apartment building
             * -condominium
             * -single family
            */
            $table->integer('mts_cuadrados');
            $table->string('nrohabitaciones');
            $table->string('nrohabitaciones');
            $table->string('nrocuartos');
            $table->string('nrocamas');
            $table->string('tipo_camas');
            /**Tipo de camas
             * 1. individual
             * 2. doble
             * 3. litera
             * 4. queen
             * 5. king
             */

            $table->string('nrobaños');
            $table->string('nrohuespedes');
            $table->string('servicios');
            /**Los servicios seran
             * cancha deportiva
             * wifi
             * cocina
             * calefaccion
             * aire aconsicionado
             * jacuzzi
             * garage
             * alarma contra incendios
             * salida de emergencia
             * telefono fijo
             */

            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('id_plan_servicios')->unsigned();
            $table->foreign('id_plan_servicios')->references('id')->on('plan_servicios')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('forsales');
    }
}
