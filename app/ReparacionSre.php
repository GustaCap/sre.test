<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReparacionSre extends Model
{
    //
    protected $table = 'reparacion_sres';

    public function equiposre()
    {
        return $this->belongsTo('App\EquipoSre');
    }
}
