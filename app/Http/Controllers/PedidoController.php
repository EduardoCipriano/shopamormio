<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\ShoppingCart;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Categoria;
use Illuminate\Support\Facades\DB;
use Exception;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $pedidos = Pedido::latest()->paginate(15);
            $totalMonth= Pedido::totalMonth();
            $totalMounthCount= Pedido::totalMonthCount();
            return view ('pedido.index', ['pedidos'=>$pedidos, 
            'totalMonth' => $totalMonth, 'totalMonthCount' => $totalMounthCount]);
        }catch(Exception $exception) {
            \Session::flash('message', 'Error'); 
            \Session::flash('alert-class', 'alert-warning'); 
            return redirect()->back();
        }
    }

    
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
        try
        {
            DB::beginTransaction();
            if($shopping_cart->productsSize()>0)
            {
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
                $pedido->sendMail(); 
                $pedido->reMail();   
                \Session::flash('message', 'Pedido realizado con éxito!!! Revisa tu correo para más información.'); 
                \Session::flash('alert-class', 'alert-success'); 
                DB::commit();
            }  
        }
        catch(Exception $exception)
        {
            DB::rollBack();
            \Session::flash('message', 'Pedido no realizado, por favor intenta de nuevo'); 
            \Session::flash('alert-class', 'alert-warning'); 
        }
        return redirect()->action('ProductoController@buynow');        
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $pedido = Pedido::find($id);
            $field = $request->name;
            $pedido->$field = $request->value;
            $pedido->save();
            DB::commit();
            return $pedido->$field;
        }catch(Exception $exception) {
            DB::rollBack();
            \Session::flash('message', 'Error no se puedo actualizar el pedido'); 
            \Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }
       
    }

   
}
