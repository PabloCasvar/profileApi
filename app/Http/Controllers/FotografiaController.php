<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class FotografiaController extends Controller
{
    public function index(){
        return App\Fotografia::all();
    }
}
