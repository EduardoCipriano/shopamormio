<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('principalproducto');
});*/

Route::get('contacto', function () {
    return view('/mostrar/contacto');
});

Route::get('nosotros', function () {
    return view('/mostrar/nosotros');
});


Route::resource('categoria', 'CategoriaController');
Route::resource('producto', 'ProductoController');
Route::get('/buynow', 'ProductoController@buynow')->name('buynow');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@home');
