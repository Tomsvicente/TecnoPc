<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class contactoController extends Controller
{
    //
    public function contacto(Request $request){
        $usuario = Auth::User();
        return view('contacto', array('usuario' => Auth::User()));
    }
}
