<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $consulta = trim($request->get('buscar'));
            $roles = Rol::where('nombre', 'LIKE', '%'.$consulta.'%')
                            ->orderBy('nombre')
                            ->paginate(3);
                            //return $categorias;

                           return view('rol.index', ["roles"=>$roles, "buscar"=>$consulta]);
        }
    }
}
