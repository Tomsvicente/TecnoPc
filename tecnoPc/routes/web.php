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
Route::get('/', 'inicioController@inicio');

Route::get('/home','inicioController@inicio');
Route::get('/contacto','contactoController@contacto');
Route::get('/faq','faqcontroller@faq');
Route::get('/productoDetalle','productoController@producto');

Route::get('/perfil','perfilController@index')->name('perfil');
Route::post('/perfil', 'perfilController@CargaAvatar');
Route::get('/perfil',  'perfilController@editar');
Route::post('/perfil',  'perfilController@actualizar');

Auth::routes();

Route::get('/home', 'inicioController@inicio')->name('home');

Auth::routes();

Route::get('/home', 'inicioController@inicio')->name('home');

Auth::routes();
