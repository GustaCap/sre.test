<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('propertytitle');
            $table->longText('description');
            $table->string('address');
            $table->string('type');
            $table->string('status');
            $table->string('location');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('garages');
            $table->string('propertyid');
            $table->float('price', 8, 2); //Sale OR Rent Price
            $table->float('area', 8, 2);
            $table->string('images');
            
            /*
              Additional Details
              Todos estos registros seran rellenbados con 1 y 0, 1 para afirmar y 0 para negar 
              All these records will be filled in with 1 and 0, 1 to affirm and 0 to deny

            */

            $table->integer('stories');
            $table->integer('ceilings');
            $table->integer('centralHeating');
            $table->integer('dualSinks');
            $table->integer('electricRange');
            $table->integer('emergencyExit');
            $table->integer('fireAlarm');
            $table->integer('firePlace');
            $table->integer('homeTheater');
            $table->integer('hurricaneShutters');
            $table->integer('laundryRoom');
            $table->integer('lawn');
            $table->integer('marbleFloors');
            $table->integer('nextToBusway');
            $table->integer('swimmingPool');
            $table->integer('wifi');

            $table->longText('messageToReviewer');

            $table->timestamps();

            /*

                Este tabla de estar relacionada con la tabla usuario de forma 1:N

            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propertys');
    }
}
