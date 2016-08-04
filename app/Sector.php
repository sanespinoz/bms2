<?php

namespace App;



use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;



class Sector extends Model
{
  protected $table ='sectores';
   protected $fillable = ['piso_id', 'nombre','descripcion'];
 protected $hidden = ['password', 'remember_token'];

     public function piso()
    {
        return $this->belongsTo('App\Piso');
    }

      public function grupos()
    {
        //creamos una relacion con el nodelo equipo
        return $this->hasMany('App\Grupo');
    }
}
