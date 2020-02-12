<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LimpiezaSre extends Model
{
    //
    protected $table = 'limpieza_sres';

    public function equiposre()
    {
        return $this->belongsTo('App\EquipoSre');
    }
}
