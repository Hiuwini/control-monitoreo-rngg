<?php

namespace App\Http\Controllers;

use App\Ubicacion;


use Illuminate\Http\Request;

class UbicacionesController extends Controller
{
	    public function index()
    {
        $ubicaciones = Ubicaciones::all();
       
       
        
    }
    
}