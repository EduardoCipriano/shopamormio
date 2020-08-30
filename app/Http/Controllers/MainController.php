<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Htpp\Requests;
use App\ShoppingCart;

class MainController extends Controller {
    public function home (){
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);
        \Session::put("shopping_cart_id", $shopping_cart->id);
        return view ('principalproducto', ["shopping_cart"=> $shopping_cart]);
    }
}
