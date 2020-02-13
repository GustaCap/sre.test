<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacions', function (Blueprint $table) {
            $table->increments('id');
            /**Datos de la reservacion + usuario que hace la reservacion */
            /**
             * Codigo generado por funcion. 6 caracacteres
             */
            $table->string('codigo_reservacions');
            $table->string('user_reserva');
            $table->string('codigo_user');
            $table->string('cantidad_personas');
            $table->date('Fecha_entreda');
            $table->date('Fecha_salida');
            /**Datos de la publicacion reservada + dueño de la propiedad */
            $table->string('codigo_publicacion');
            $table->string('owner_user');
            $table->string('codigo_user');

            /**
             * Relaciones
             */
            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('reservacions');
    }
}
