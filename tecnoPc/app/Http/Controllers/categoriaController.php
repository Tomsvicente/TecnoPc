<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class categoriaController extends Controller
{
    public function listado(){
      $usuario = Auth::User();
      return view('categoria/{{$id}}', compact('usuario'));

    }
}
