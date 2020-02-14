<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->increments('id');
             /**
             * Relacion: reservacion -> usuario
             */
            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
             /**
             * Relacion: reservacion -> publicacion
             */
            $table->integer('id_publicacion')->unsigned();
            $table->foreign('id_publicacion')->references('id')->on('publicaciones')->onUpdate('cascade')->onDelete('cascade');
            $table->string('codigoReservacion')->unique();
            /**
             * Codigo generado por funcion. 10 caracacteres
             */
            $table->string('tipoHuesped');
            /**
             * Tipo Huesped: Familia, pareja, una sola persona
             */
            $table->string('cantidadPersonas');
            $table->string('motivoReserva');
            /**
             * Motivo reserva: Negocios, Vacaciones, turismo
             */
            $table->date('fechaEntreda');
            $table->date('fechaSalida');

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
        Schema::dropIfExists('reservaciones');
    }
}
