<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users'; /* agregada 02/01/2020 */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**Relacion: un usuario tiene un rol */
    public function rol()
    {
        return $this->belongsTo('App\RolSre');
    }

    /**Relacion: un usuarios tiene muchas reservaciones */
    public function reservaciones()
    {
        return $this->hasMany('App\Reservacion');
    }

    /**Relacion: un usuario puede publicar muchas propiedades */
    public function forrents()
    {
        return $this->hasMany('App\Forrent');
    }

    /**Relacion: un usuario puede publicar muchas propiedades */
    public function forsales()
    {
        return $this->hasMany('App\Forsale');
    }
}
