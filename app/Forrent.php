<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forrent extends Model
{
    //
    protected $table = 'forrents';

    /**Relacion: una publicacion para la rente pertenece a un usuario
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function plan_servicio()
    {
        return $this->belongsTo('App\PlanServicio');
    }
}
