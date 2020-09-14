<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Municipio;
use Exception;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectMunicipio(Request $request, $id)
    {

        try {
            $municipios= Municipio::where('condicion','=','1')
            ->where('id_departamento','=',$id)
            ->select('id','nombre')
            ->orderBy('nombre', 'asc')
            ->get();
            return response()->json($municipios);
        }catch(Exception $exception) {
            \Session::flash('message', 'Error'); 
            \Session::flash('alert-class', 'alert-warning'); 
            return redirect()->back();
        }
    }
} 