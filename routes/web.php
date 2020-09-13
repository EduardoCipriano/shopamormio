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

    Route::resource('pedido', 'PedidoController',[
        'only' => ['store']
    ]);

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
    Route::get('/xcat', 'ProductoController@xcat');
    Route::get('/carrito', 'ShoppingCartsController@index');
    Route::delete('eliminar/{id}', 'InShoppingCartsController@destroy')
    ->name('eliminar.destroy');
    Route::get('/', 'MainController@home')->name('/'); 
   /* Route::resource('pedido', 'PedidoController', [
        'only' => 'store'
    ]);*/
    Route::resource ('compras', 'ShoppingCartsController', [
        'only' => ['show']
    ]);
    Route::get('selectMunicipio/{id}','MunicipioController@selectMunicipio');

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');;
    Route::post('logint', 'Auth\LoginController@login')->name('logint');
});

Route::group(['middleware'=>['auth']],function(){

    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
   
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['middleware' => ['Vendedor']], function () {
        
        Route::resource('pedido', 'PedidoController',[
            'only' => ['index', 'update']
        ]);
    
    });

    Route::group(['middleware' => ['Administrador']], function () {
         
        
        Route::resource('categoria', 'CategoriaController');        
        Route::resource('producto', 'ProductoController');
        
        Route::resource('pedido', 'PedidoController',[
            'only' => ['index', 'update']
        ]);
    
    });

    Route::group(['middleware' => ['Root']], function () {

        Route::resource('categoria', 'CategoriaController');        
        Route::resource('producto', 'ProductoController');
        
        Route::resource('pedido', 'PedidoController',[
            'only' => ['index', 'update']
        ]);

        Route::resource('rol', 'RolController');
        Route::resource('user', 'UserController');
   });
    

});
