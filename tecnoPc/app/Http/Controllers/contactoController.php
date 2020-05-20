<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class contactoController extends Controller
{
    //
    public function contacto(){
        return view("contacto", array('usuario' => Auth::user()));
    }
}
