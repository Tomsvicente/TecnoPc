<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users', User::paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::User()->id == $id) {
          return redirect()->route('admin.users.index')->with('warning', 'No podés editarte a vos mismo');
        }

        return view('admin.users.edit')->with(['user' => User::find($id), 'roles' => Role::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      if (Auth::User()->id == $id) {
        return redirect()->route('admin.users.index')->with('warning', 'No podés editarte a vos mismo');
      }

      $user = User::find($id);
      $user ->roles()->sync($request ->roles);

      return redirect()->route('admin.users.index')->with('success', 'El usuario se ha actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if (Auth::User()->id == $id) {
        return redirect()->route('admin.users.index')->with('warning', 'No podés eliminarte  a vos mismo');
      }
        $user = User::find($id);

        if ($user) {
          $user->roles()->detach();
          $user->delete();
          return redirect()->route('admin.users.index')->with('success', 'El usuario se eliminó con éxito');
        }
        return redirect()->route('admin.users.index')->with('warning', 'El usuario no se puede eliminar');
    }
}
