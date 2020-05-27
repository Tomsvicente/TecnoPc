<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\Category;
use Session;
use Auth;

class inicioController extends Controller
{
    //
    public function inicio(){
        return view("inicio", array('usuario' => Auth::user()), ['categorias' => $categorias]);
    }
}
