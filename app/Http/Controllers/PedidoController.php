<?php

namespace App\Http\Controllers;
use App\Pedido;
use App\ShoppingCart;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class PedidoController extends Controller
{
    public function store(Request $request)
    {
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        $tiempo=Carbon::now('America/Guatemala');

    \Session::remove("shopping_cart_id");

        $pedido=Pedido::create([            
            'shopping_cart_id' => $shopping_cart_id,
            'id_departamento' => $request->id_departamento,
            'id_municipio' => $request->id_municipio,
            'direccion' => $request->direccion,
            'cliente'   => $request->cliente,
            'correo'    =>$request->correo,
            'telefono' =>$request->telefono,
            'status' => 'creado',            
            'metodo_pago' => 'Contraentrega',
            'total' => $request->total,
            'fecha'  => $tiempo->toDateString()
        ]);

        $shopping_cart->approve();

        $municipio= $pedido->municipio->nombre;
        $departamento= $pedido->departamento->nombre;

                        

        return view ("shopping_carts.completed", ["shopping_cart"=>$shopping_cart,"pedido"=>$pedido, "departamento"=>$departamento, "municipio"=>$municipio]);
    }
}
