<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class TrabajoController extends Controller
{
    public function index(){
        return App\Trabajo::all();
        //return App\Actividad::find(1)->trabajo;
        return App\Trabajo::find(1)->actividades;
    }

    public function get_actividades(){
        $trabajos = App\Trabajo::all();
        $trabajos_obj = array();
        foreach($trabajos as $trabajo){
            //echo $trabajo->id;
            $actividades = app\Actividad::where('trabajo_id', '=', $trabajo->id)->get();
            $trabajo_obj = json_decode($trabajo);
            $trabajo_obj->actividades = $actividades;
            
            array_push($trabajos_obj, $trabajo_obj);
        }
        return json_encode($trabajos_obj);
    }
}


