<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Limpieza extends Model
{
    //
    protected $table = 'limpiezas';

    protected $fillable = [
        'observaciones',
    ];

    public function equiposre()
    {
        return $this->belongsTo('App\EquipoSre');
    }
}
