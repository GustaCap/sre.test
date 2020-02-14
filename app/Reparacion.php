<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    //
    protected $table = 'reparaciones';

    protected $fillable = [
        'observaciones',
    ];

    public function equiposre()
    {
        return $this->belongsTo('App\EquipoSre');
    }
}
