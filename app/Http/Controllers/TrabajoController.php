<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class TrabajoController extends Controller
{
    public function index(){
        //return App\Actividad::find(1)->trabajo;
        return App\Trabajo::find(1)->actividades;
    }
}
