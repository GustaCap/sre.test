<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    //
    protected $table = 'publicaciones';

    protected $fillable = [
        'tipoPropiedad','images','dirección','mtsCuadrados','nrohabitaciones','nrocamas','tipoCamas','nrobaños','nrohuespedes',
        'internet','wifi','cocina','calefaccion','aa','jacuzzi','garage','alarmaIncendio','salidaEmergencia','telefonoFijo','aguaCaliente',
        'piscina','areasVerdes','restaurant','playaPrivada','otros','observaciones','id_plan'
    ];

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
