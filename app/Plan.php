<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table = 'planes';

    protected $fillable = [
        'denominacion','descripcion',
    ];

    /**Relacion: un plan de servicio pertenece a muchas publicacion para la renta
     */
    public function publicaciones()
    {
        return $this->hasMany('App\Publicacion');
    }


}
