<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\InShoppingCart;
use App\ShoppingCart; 
use Illuminate\Support\Facades\Redirect;
use App\Categoria;use Illuminate\Support\Facades\DB;
use Exception;

class InShoppingCartsController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $shopping_cart_id= \Session::get('shopping_cart_id');
            $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

            $response=InShoppingCart::updateOrCreate([
                //Add unique field combo to match here
                //For example, perhaps you only want one entry per user:
                'id_producto'   => $request->id_producto,
                'shopping_cart_id' => $shopping_cart->id
            ],[
                'cantidad'  => $request->get('cantidad'),
                'precio'    =>  $request->get('pre')
            ]);
            DB::commit();
            if($response) {
                return redirect ('/buynow');
            }else{
                return back();
            }
           
        }
        catch(Exception $exception) {
            DB::rollBack();
            \Session::flash('message', 'No se pudo agregar el producto'); 
            \Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }
        
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        try {
            DB::beginTransaction();
            $shopping_cart_id= \Session::get('shopping_cart_id');
            $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);    
            $shopping_cart->products()->detach($request->id);
            DB::commit();
            return Redirect::to("/carrito"); 
        }catch(Exception $exception) {
            DB::rollBack();
            \Session::flash('message', 'No se puedo eliminar del carrito'); 
            \Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }
        
        
    }

    
}
