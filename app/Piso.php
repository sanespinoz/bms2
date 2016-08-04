<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Piso extends Model
{
    protected $table ='pisos';

    protected $fillable =[
    	'nombre','descripcion'
    ];
 protected $hidden = ['password', 'remember_token'];

      public function sectores()
    {
        //creamos una relacion con el nodelo equipo
        return $this->hasMany('App\Sector');
    }
}
