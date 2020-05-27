<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Session;
use Auth;

class productoController extends Controller
{
    //

    public function getIndex(){
      $productos = Product::all();
      $categorias = Category::all();
      return view('inicio', ['productos' => $productos], ['categorias' => $categorias]);
    }

    public function getAddToCart(Request $request, $id){
      $product = Product::find($id);
      $carritoViejo = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($carritoViejo);
      $cart->add($product, $product->id);

      $request->session()->put('cart',$cart);
      return redirect()->route('producto.index');
    }

    public function getReducirUno($id){
      $carritoViejo = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($carritoViejo);
      $cart->reducirUno($id);

      Session::put('cart', $cart);
      return redirect()->route('producto.carrito');
    }

    public function getRemoverItem($id){
      $carritoViejo = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($carritoViejo);
      $cart->removerItem($id);

      if (count($cart->items) > 0) {
        Session::put('cart', $cart);
      } else {
        Session::forget('cart');
      }
      return redirect()->route('producto.carrito');
    }

    public function getCarrito(){
      if (!Session::has('cart')) {
        return view ('carrito', ['productos' => null]);
      }
      $productos = Product::all();
      $categorias = Category::all();
      $carritoViejo = Session::get('cart');
      $cart = new Cart($carritoViejo);
      return view('carrito', ['productos' =>$cart->items, 'totalPrice' =>$cart->totalPrice]);
    }

}
