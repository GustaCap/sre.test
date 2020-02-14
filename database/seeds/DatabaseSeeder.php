<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);




        // DB::table('publicaciones')->insert([

        //     'id_user' => '1',
        //     'codigoPublicacion' => Str::random(10),
        //     'tipoPropiedad' => 'Compra/venta',
        //     'images' => 'foto1.jpg, foto2.jpg, foto3.jpg, foto4.jpg,',
        //     'dirección' => 'Caracas, venezuela',
        //     'mtsCuadrados' => '100',
        //     'nrohabitaciones' => '4',
        //     'nrocamas' => '4',
        //     'tipoCamas' => 'individual, doble, queen',
        //     'nrobaños' => '4',
        //     'nrohuespedes' => '4',
        //     'internet' => 'si',
        //     'wifi' => 'si',
        //     'cocina' => 'si',
        //     'calefaccion' => 'si',
        //     'aa' => 'si',
        //     'jacuzzi' => 'si',
        //     'garage' => 'si',
        //     'alarmaIncendio' => 'no',
        //     'salidaEmergencia' => 'no',
        //     'telefonoFijo' => 'no',
        //     'aguaCaliente' => 'no',
        //     'piscina' => 'no',
        //     'areasVerdes' => 'no',
        //     'restaurant' => 'no',
        //     'playaPrivada' => 'no',
        //     'otros' => 'Se registrara cualquier servicio que no este en los anteriores',
        //     'observaciones' => 'Aqui se registrara cualquier tipo de regla de uso de la propiedad',
        //     'id_plan' => '1'
        // ]);

        DB::table('reservaciones')->insert([

            'id_users' => '1',
            'id_publicacion' => '1',
            'codigoReservacion' => Str::random(10),
            'tipoHuesped' => 'familia',
            'cantidadPersonas' => '4',
            'motivoReserva' => 'Vacaciones',
            'fechaEntreda' => '2020-02-10',
            'fechaSalida' => '2020-02-10'
        ]);


    }
}
