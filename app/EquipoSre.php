<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipoSre extends Model
{
    //
    protected $table = 'equipo_sres';

    public function inspeccionsres()
    {
        return $this->hasMany('App\InpeccionSre');
    }

    public function limpiezasres()
    {
        return $this->hasMany('App\LimpiezaSre');
    }

    public function reparacionsres()
    {
        return $this->hasMany('App\ReparacionSre');
    }

}
