<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;
use Exception;

class RolController extends Controller
{
    public function index(Request $request)
    {
        try {
            if($request){
                $consulta = trim($request->get('buscar'));
                $roles = Rol::where('nombre', 'LIKE', '%'.$consulta.'%')
                                ->orderBy('nombre')
                                ->paginate(3);
                return view('rol.index', ["roles"=>$roles, "buscar"=>$consulta]);
            }
        }catch(Exception $exception) {
            \Session::flash('message', 'Error'); 
            \Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }
    }
}
