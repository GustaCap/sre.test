<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    //
    protected $table = 'reservaciones';

    protected $fillable = [
        'id_users','id_publicacion','codigoReservacion','tipoHuesped','cantidadPersonas','motivoReserva','fechaEntreda','fechaSalida'
    ];

    /**Relacion: una reservacion pertenece a un usuario */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
