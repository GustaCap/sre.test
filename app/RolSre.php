<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolSre extends Model
{
    //
    protected $table = 'rol_sres';


    /**Relacion: un rol lo tienen muchos usuarios */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}





