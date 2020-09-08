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
/*
Route::get('/', function () {
    return view('index');
});*/
Route::group(['middleware'=>['guest']],function(){

    Route::get('contacto', function () {
        return view('/mostrar/contacto');
    });
    
    Route::get('nosotros', function () {
        return view('/mostrar/nosotros');
    });

    Route::resource('in_shopping_carts', 'InShoppingCartsController',[
        'only'=>['store','destroy']
    ]);
        
    Route::get('/buynow', 'ProductoController@buynow')->name('buynow');
    Route::get('/carrito', 'ShoppingCartsController@index');
    Route::delete('eliminar/{id}', 'InShoppingCartsController@destroy')
    ->name('eliminar.destroy');
    Route::get('/', 'MainController@home'); 
});

Route::group(['middleware'=>['auth']],function(){

    Route::resource('categoria', 'CategoriaController');        
    Route::resource('producto', 'ProductoController');
    Route::get('/home', 'HomeController@index')->name('home');
      

});

Auth::routes();
