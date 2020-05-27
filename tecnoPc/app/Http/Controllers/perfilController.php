<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;

class perfilController extends Controller
{

public function __construct()
{
    $this->middleware('auth');
}


public function index()
{

  $usuarioLog = Auth::user();
  if ($usuarioLog == null) {
      return redirect('/home');
    }else {
        return view('perfil', array('usuario' => Auth::user()));
      }
    }

public function CargaAvatar(Request $request){


  if($request->hasFile('avatar')){
      		$avatar = $request->file('avatar');
      		$filename = time() . '.' . $avatar->getClientOriginalExtension();
      		Image::make($avatar)->resize(300, 300)->save( public_path('/cargas/avatares/' . $filename ) );

      		$usuario = Auth::user();
      		$usuario->avatar = $filename;
      		$usuario->save();
      	}

  return view('perfil', array('usuario' => Auth::User()));

}

public function editar(Request $request)
  {

      return view('/perfil');
  }
//
//
// public function actualizar(Request $request){
//
//     $usuarioEditar = new User();
//     $usuarioEditar ->name =$request['name'];
//     $usuarioEditar ->surname =$request['surname'];
//     $usuarioEditar ->direccion =$request['direccion'];
//
//     $usuarioEditar->save();
//
//
//     return redirect('/perfil');
// }


  public function actualizar(Request $request)
    {

        $this->validate(request(), [
            'name' => 'string|min:4',
            'surname' => 'string|min:4',
            'direccion' => 'string|min:4',
            'password' => 'required|min:6|confirmed'
        ]);
        $usuario = auth::user();
        $usuario->name = request('name');
        $usuario->surname = request('surname');
        $usuario->direccion = request('direccion');
        $usuario->password = bcrypt(request('password'));

        $usuario->save();

        return view('/perfil', $usuario);
     }

  }
