<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Departamento;
use Exception;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        try{
            $departamentos= Departamento::where('condicion','=','1')
            ->select('id','nombre')
            ->orderBy('nombre', 'asc')
            ->get();
            return['departamentos'=>$departamentos];
        }catch(Exception $exception){
           
            \Session::flash('message', 'Error'); 
            \Session::flash('alert-class', 'alert-warning'); 
            return redirect()->back();
        }
    }
}