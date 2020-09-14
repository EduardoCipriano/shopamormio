<?php

namespace App\Http\Controllers;
use App\ShoppingCart;
use App\Departamento;
use App\Pedido;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;


class ShoppingCartsController extends Controller
{
    public function index(){
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id); 
        try {
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
        }catch(Exception $exception) {
            \Session::flash('message', 'Error al mostrar el carrito'); 
            \Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }  
    }

    public function show($id){
        try {
            $shopping_cart = ShoppingCart::where('customid', $id)->first();
            $pedido = $shopping_cart->pedido();
            return view ("shopping_carts.finaly", ["shopping_cart"=>$shopping_cart,"pedido"=>$pedido]);    
        }catch(Exception $exception) {
            \Session::flash('message', 'Error'); 
            \Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }
        

    }
}