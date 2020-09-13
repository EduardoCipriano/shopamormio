<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Producto;
use DB; 
use Illuminate\Support\Facades\Storage;



class ProductoController extends Controller
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
            $productos = Producto::join('categoria', 'producto.id_categoria', '=', 'categoria.id') 
                            ->select('producto.*', 'categoria.nombre as categoria' )
                            ->where('producto.nombre', 'LIKE', '%'.$consulta.'%')
                            ->orderBy('producto.nombre')
                            ->paginate(15);
                            //return view('producto.index');
            $categorias = Categoria::all();
                           return view('producto.index', ["productos"=>$productos, "buscar"=>$consulta, 'categorias'=>$categorias]);
        }


    }
    public function buynow(Request $request)
    {  
        if ($request) {
            $buscar=trim($request->get('buscar'));
            $productos = Producto::join('categoria', 'producto.id_categoria', '=', 'categoria.id') 
            ->select('producto.*', 'categoria.nombre as categoria' )
            ->where('producto.condicion', '=', '1')
            ->where ('producto.nombre', 'like', '%'.$buscar.'%')
            ->orderBy('producto.nombre')
            ->paginate(10);
            $categorias = Categoria::has('productos')->get();
            return view('mostrar.catalogo', ['productos'=>$productos, 'categorias'=>$categorias, 'buscar'=>$buscar]);
             
        } 
    }

    public function xcat(Request $request)
    {
        if($request)
        {
            $productos = Producto::join('categoria', 'producto.id_categoria', '=', 'categoria.id') 
            ->select('producto.*', 'categoria.nombre as categoria' )
            ->where('producto.condicion', '=', '1')
            ->where('producto.id_categoria','=', $request->id)
            ->orderBy('producto.nombre')
            ->paginate(10);           
        }

        
        $categorias = Categoria::has('productos')->get();
        return view('mostrar.catalogo', ["productos"=>$productos, 'categorias'=>$categorias]);   
    }

   
    public function store(Request $request)
    {
        
        $productos= new Producto();
        $productos->codigo= $request->codigo;
        $productos->id_categoria=$request->id_categoria;
        $productos->nombre= $request->nombre;
        $productos->descripcion=$request->descripcion;
        $productos->precio= $request->precio;
        $productos->condicion='1';
        $hasFile = $request->hasFile('cover') && $request->cover->isValid();  //has File para ver si viene un archivo o no, y isValid devuelve verdadero cuando el archivo se pudo subir
        //despues que el producto se haya guardado se va a mover
        //el archivo de una carpeta temporal a una carpeta del proyecto
        if($hasFile)
        {
            $extension = $request->cover->extension(); //extramos extension de la imagen
            $productos->extension=$extension; //guardamos extension de la imagen en la tabla
            //develve la extension del archivo
        }
        $productos->save();
       

        if($productos->save())//si se guardo el registro
        {
            if($hasFile) //si se recibio un archivo
            {
                $request->cover->storeAs('public/img', "$productos->id.$extension"); //images es la carpeta donde se va a guardar
                ///store crea un nombre aleatorio, storeAs nosotros le asignamos un nombre
            }
        }
        return Redirect::to("producto");//redireccionar al index 
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
        $productos= Producto::findOrFail($request->id_producto);
        $productos->codigo= $request->codigo;
        $productos->id_categoria=$request->id_categoria;
        $productos->nombre= $request->nombre;
        $productos->descripcion=$request->descripcion;
        $productos->precio= $request->precio;
        $productos->condicion='1';
        $hasFile = $request->hasFile('cover') && $request->cover->isValid();  //has File para ver si viene un archivo o no, y isValid devuelve verdadero cuando el archivo se pudo subir
        //despues que el producto se haya guardado se va a mover
        //el archivo de una carpeta temporal a una carpeta del proyecto

            
        if($hasFile)
        {
            $fileName = $productos->id.'.'.$productos->extension;
            //Storage::delete('app/public/img/'.$fileName); esto no funciono  
            unlink(storage_path('app/public/img/'.$fileName));         
            $extension = $request->cover->extension(); //extramos extension de la imagen
            $productos->extension=$extension; //guardamos extension de la imagen en la tabla
            //develve la extension del archivo
             
        }
        $productos->save();

        if($productos->save())//si se guardo el registro
        {
            if($hasFile) //si se recibio un archivo
            {
                
                $request->cover->storeAs('public/img', "$productos->id.$extension"); //images es la carpeta donde se va a guardar
                ///store crea un nombre aleatorio, storeAs nosotros le asignamos un nombre
            }
        }
        return Redirect::to("producto");//redireccionar al index
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $productos  = Producto::findOrFail($request->id_producto);
        if($productos->condicion=='1')
        {
            $productos->condicion='0';
            $productos->save();
            
        }else 
        {
            $productos->condicion='1';
            $productos->save();
        }
        return Redirect::to("producto");
    }

   
}
