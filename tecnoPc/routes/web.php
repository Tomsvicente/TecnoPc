<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','inicioController@inicio');
Route::get('/contacto','contactoController@contacto');
Route::get('/faq','faqcontroller@faq');
Route::get('/perfil','perfilController@perfil');
Route::get('/productoDetalle','productoController@producto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
