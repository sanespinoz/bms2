<?php

namespace App;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Luminaria extends Model
{
   protected $table ='luminarias';
   protected $fillable = ['grupo_id', 'identificacion','ubicacion','cant_lamparas','denominacion','marca','tipo','consumo','tiempo_uso'];
    protected $hidden = ['password', 'remember_token'];

   public function grupo()
    {
        return $this->belongsTo('App\Grupo');
    }

      public function lamparas()
    {
     
        return $this->hasMany('App\Lampara');
    }
}
