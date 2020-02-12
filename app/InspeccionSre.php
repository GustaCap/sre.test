<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspeccionSre extends Model
{
    //
    protected $table = 'inspeccion_sres';

    /**
     * Relacion: Una inspeccion la realiza un personal de Sre
     */
    public function equiposre()
    {
        return $this->belongsTo('App\EquipoSre');
    }
}
