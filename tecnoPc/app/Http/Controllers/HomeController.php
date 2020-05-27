<?php

namespace App\Http\Controllers;


use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Session;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('inicio', array('usuario' => Auth::user()),['categorias' => $categorias]);
    }
}
