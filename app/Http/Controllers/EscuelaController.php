<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class EscuelaController extends Controller
{
    public function index(){
        return App\Escuela::all(); 
    }
}