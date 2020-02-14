<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //
    protected $table = 'pagos';

    protected $fillable = [
        'observaciones',
    ];

    public function equiposre()
    {
        return $this->belongsTo('App\EquipoSre');
    }


}
