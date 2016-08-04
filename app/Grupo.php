<?php

namespace App;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Grupo extends Model
{
    protected $table ='grupos';
    protected $fillable = ['nombre','descripcion','cant_luminarias','energia_consumida','sector_id'];
    protected $hidden = ['password', 'remember_token'];


       public function sector()
    {
        return $this->belongsTo('App\Sector');
    }

      public function luminarias()
    {
        //creamos una relacion con el nodelo equipo
        return $this->hasMany('App\Luminaria');
    }
}
