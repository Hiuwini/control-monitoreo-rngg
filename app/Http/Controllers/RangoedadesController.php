<?php

namespace App\Http\Controllers;

use App\Rangoedades;
use App\Beneficiarios;
use Illuminate\Http\Request;

class RangoedadesController extends Controller
{
	    public function create()
    {
        $rangoedades = Rangoedades::all();
        $beneficiarios = Beneficiarios::all();
        //return view('beneficiarios/index', compact('beneficiarios'));

    }
    
}