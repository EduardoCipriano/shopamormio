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

        $response=InShoppingCart::create([ 
            "shopping_cart_id"=> $shopping_cart->id,
            "id_producto" => $request->id_producto
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
