<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Product;

class categoriaController extends Controller
{

    public function filtrarCategorias($id){

      $category = Category::SearchCategory($id)->first();
      $productos = $category->productos()->paginate(9);
      $categorias = Category::all();
      return view('inicio', ['productos' => $productos], ['categorias' => $categorias]);


    }

}
