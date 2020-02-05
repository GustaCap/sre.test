<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    //
    protected $table = 'reservacions';

    /**Relacion: una reservacion pertenece a un usuario */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
