<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class index extends Controller
{
    public function index($id){
      $user = User::where('id', $id)->first();

      if ($user) {
        Session()->put('impersonate', $user->id);
      }
      return redirect('/');
    }
    public function destroy(){
      Session()->forget('impersonate');
      return redirect('/');
    }
}
