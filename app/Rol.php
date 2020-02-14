<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table = 'roles';


    /**Relacion: un rol lo tienen muchos usuarios */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}





