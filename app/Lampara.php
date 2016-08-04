<?php

namespace App;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Lampara extends Model
{
    protected $table ='lamparas';
    protected $fillable = ['luminaria_id', 'marca','tipo','voltaje','factor_potencia','fecha_instalacion','potencia','vida','horas_activas','tiempo_restante','estado'];
     protected $hidden = ['password', 'remember_token'];


    public function luminaria()
    {
        return $this->belongsTo('App\Luminaria');
    }
}
