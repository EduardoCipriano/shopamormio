<?php

namespace App\Http\Controllers;
use App\ShoppingCart;
use App\Departamento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCartsController extends Controller
{
    public function index(){
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);    

        $productos = $shopping_cart->products()->get();
        $productsCount= $shopping_cart->productsSize();
        $total=0;
        foreach ($productos as $p)
        {
            $subtotal=$p->pivot->precio*$p->pivot->cantidad; 
            $total=$total+$subtotal;
        }

        $departamentos= Departamento::where('condicion','=','1')
        ->select('id','nombre')
        ->orderBy('nombre', 'asc')
        ->get();

        return view("shopping_carts.index", ["productsCount"=>$productsCount, "productos"=>$productos, "total"=>$total, 'departamentos'=>$departamentos]);
    }

    public function show($id){
        $shopping_cart = ShoppingCart::where('customid', $id)->first();

        $pedido = $shopping_cart->pedido();
        $municipio= $pedido->municipio->nombre;
        $departamento= $pedido->departamento->nombre;
        return view ("shopping_carts.finaly", ["shopping_cart"=>$shopping_cart,"pedido"=>$pedido, "departamento"=>$departamento, "municipio"=>$municipio]);

    }
}