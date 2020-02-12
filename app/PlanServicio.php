<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanServicio extends Model
{
    //
    protected $table = 'plan_servicios';

    /**Relacion: un plan de servicio pertenece a muchas publicacion para la renta
     */
    public function forrents()
    {
        return $this->hasMany('App\Forrent');
    }

    /**Relacion: un plan de servicio pertenece a muchas publicacion para la venta
     */
    public function forsales()
    {
        return $this->hasMany('App\Forsale');
    }
}
