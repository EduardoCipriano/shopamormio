<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Categoria;
use DB; 

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $consulta = trim($request->get('buscar'));
            $categorias = Categoria::where('nombre', 'LIKE', '%'.$consulta.'%')
                            ->orderBy('nombre')
                            ->paginate(15);
                            //return $categorias;

                           return view('categoria.index', ["categorias"=>$categorias, "buscar"=>$consulta]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorias= new Categoria();
        $categorias->nombre= $request->nombre;
        $categorias->descripcion=$request->descripcion;
        $categorias->condicion='1';
        $categorias->save();
        return Redirect::to("categoria");//redireccionar al index marca
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $categorias = Categoria::findOrFail($request->id_categoria);
        $categorias->nombre= $request->nombre;
        $categorias->descripcion=$request->descripcion;
        $categorias->condicion='1';
        $categorias->save();
        return Redirect::to("categoria");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $categorias  = Categoria::findOrFail($request->id_categoria);
        if($categorias->condicion=='1')
        {
            $categorias->condicion='0';
            $categorias->save();
            
        }else 
        {
            $categorias->condicion='1';
            $categorias->save();
        }
        return Redirect::to("categoria");
    }
}
