<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspeccion extends Model
{
    //
    protected $table = 'inspecciones';

    protected $fillable = [
        'observaciones',
    ];


    /**
     * Relacion: Una inspeccion la realiza un personal de Sre
     */
    public function equiposre()
    {
        return $this->belongsTo('App\EquipoSre');
    }
}
