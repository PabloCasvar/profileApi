<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CanalController extends Controller
{
    public function index(){
        return App\Canal::all();
    }
}
