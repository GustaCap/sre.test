<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forsale extends Model
{
    //
    protected $table = 'forsales';

    /**Relacion: una publicacion para la venta pertenece a un usuario
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }





}
