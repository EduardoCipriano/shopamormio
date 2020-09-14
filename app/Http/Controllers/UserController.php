<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class UserController extends Controller
{
    public function index(Request $request)
    {
        try {
            if($request){
                $sql=trim($request->get('buscarTexto'));
                $usuarios=DB::table('users')
                ->join('roles','users.idrol','=','roles.id')
                ->select('users.id','users.nombre','users.correo',
                'users.password','users.condicion','users.idrol',
                'roles.nombre as rol')
                ->where('users.nombre','LIKE','%'.$sql.'%')
                
                ->orderBy('users.id','desc')
                ->paginate(3);
                $roles=DB::table('roles')
                ->select('id','nombre','descripcion')
                ->where('condicion','=','1')->get();
                return view('user.index',["usuarios"=>$usuarios,"roles"=>$roles,"buscarTexto"=>$sql]);    
            }    
        }catch(Exception $exception) {
            \Session::flash('message', 'Error'); 
            \Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        } 
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user= new User();
            $user->nombre = $request->nombre;
            $user->correo = $request->correo;
            $user->password = bcrypt( $request->password);
            $user->condicion = '1';
            $user->idrol = $request->id_rol;  
            $user->save();
            DB::commit();
            return Redirect::to("user");
        }catch(Exception $exception) {
            DB::rollBack();
            \Session::flash('message', 'Error al guardar el usuario'); 
            \Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        try {
            DB::beginTransaction();
            $user= User::findOrFail($request->id_usuario);
            $user->nombre = $request->nombre;
            $user->correo = $request->correo;
            $user->password = bcrypt( $request->password);
            $user->condicion = '1';
            $user->idrol = $request->id_rol; 
            $user->save();
            DB::commit();
            return Redirect::to("user");
        }catch(Exception $exception) {
            DB::rollBack();
            \Session::flash('message', 'Error al actualizar el usuario'); 
            \Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }  
    }


    public function destroy(Request $request)
    {
        $user= User::findOrFail($request->id_usuario);
        try {
            DB::beginTransaction();
            if($user->condicion=="1"){

                $user->condicion= '0';
                $user->save();
           }else{

                $user->condicion= '1';
                $user->save();
            }
            DB::commit();
            return Redirect::to("user");
        }catch(Exception $exception) {
            DB::rollBack();
            \Session::flash('message', 'Error al eliminar el usuario'); 
            \Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        } 
         
    }

}