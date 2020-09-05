<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Htpp\Requests;


class MainController extends Controller {
    public function home (){
        
        return view ('index');
    }
}
