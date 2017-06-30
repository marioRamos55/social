<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
	public $timestamps=false;
	protected $fillable=['nombre','horario'];
    //relacion de muhcos a muchos xD 

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }

    puiblic function scopeRolePrestador($query)use($rol)
    {

    	return $query->wuth(['users'=>function($query)use($rol){
    		$query->where('rol',$rol);
    		}]);
    }
}
