<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //Set the correct table name
    protected $table = 'Actividades';

    //Returns the parent Trabajo 
    public function trabajo(){
        return $this->belongsTo('App\Trabajo');
    }
}
