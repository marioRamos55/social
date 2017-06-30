<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $appends['numero__programas'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'correo', 'password','codigo','carrera_id','rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    PUBLIC function carreras()
    {
        return $this->belongs('App\Carrera');
    }

/**
     * RELACION DE MUCHOS A MUCHOS
     *
     * @var array
     */
    public function programas()
    {
        return $this->belongsToMany('App\programas');
    }

    public function getUsiarioCorreoAttibute()
    {
        return $this->nombre . '-' . $this->correo;
    }


    public function getNumeroProgramasAttribute()
    {
        $noProgramas=cout($this-programas()->get());
        return $noProgramas;
    }



}
