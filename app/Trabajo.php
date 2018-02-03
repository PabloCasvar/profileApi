<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    //
    //Get the Actividades 
    public function actividades(){
        return $this->hasMany('App\Actividad');
    }

}
