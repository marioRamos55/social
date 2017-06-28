<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
	public $timestamps=false;
	protected $fillable=['nombre','horario'];
    //relacion de muhcos a muchos xD 

    public function User()
    {
    	return $this->belongsToMany('App\User');
    }
}
