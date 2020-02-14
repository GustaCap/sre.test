<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipoSre extends Model
{

    protected $table = 'equipoSre';

    protected $fillable = [
        'tipo','denominacion','rifDni', 'razonSocial',
    ];

    public function inspecciones()
    {
        return $this->hasMany('App\Inpeccion');
    }

    public function limpiezas()
    {
        return $this->hasMany('App\Limpieza');
    }

    public function reparaciones()
    {
        return $this->hasMany('App\Reparacion');
    }

}
