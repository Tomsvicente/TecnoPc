<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class inicioController extends Controller
{
    //
    public function inicio(){
        return view("inicio", array('usuario' => Auth::user()));
    }
}
