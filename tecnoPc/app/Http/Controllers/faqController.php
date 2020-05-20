<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class faqController extends Controller
{
    public function faq(){
        return view("faq", array('usuario' => Auth::user()));
    }
}
