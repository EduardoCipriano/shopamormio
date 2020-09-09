<?php

namespace App\Http\Controllers;
use App\ShoppingCart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCartsController extends Controller
{
    public function index(){
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);    

        $productos = $shopping_cart->products()->get();
        $total=0;
        foreach ($productos as $p)
        {
            $subtotal=$p->pivot->precio*$p->pivot->cantidad; 
            $total=$total+$subtotal;
        }

        return view("shopping_carts.index", ["productos"=>$productos], ["total"=>$total]);
    }

    public function show ($id){
        $shopping_cart = ShoppingCart::where('customid', $id)->first();

        $pedido = $shopping_cart->pedido();
        return view ("shopping_carts.completed", ["shopping_cart"=>$shopping_cart,"pedido"=>$pedido]);

    }
}