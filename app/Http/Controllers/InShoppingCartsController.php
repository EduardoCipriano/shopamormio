<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\InShoppingCart;
use App\ShoppingCart; 
use Illuminate\Support\Facades\Redirect;

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
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        $response=InShoppingCart::updateOrCreate([
            //Add unique field combo to match here
            //For example, perhaps you only want one entry per user:
            'id_producto'   => $request->id_producto,
        ],[
            'cantidad'  => $request->get('cantidad'),
            'precio'    =>  $request->get('pre'),
            'shopping_cart_id' => $shopping_cart->id
        ]);

        if($response)
        {
            return redirect ('/buynow');
        }
        else{
            return back();
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
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);    
        $shopping_cart->products()->detach($request->id);
        return Redirect::to("/carrito");
        
    }

    
}
