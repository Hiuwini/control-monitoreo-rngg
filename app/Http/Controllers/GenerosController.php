<?php

namespace App\Http\Controllers;

use App\Generos;
use App\Beneficiarios;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
	    public function create()
    {
        $generos = Generos::all();
        $beneficiarios = Beneficiarios::all();
        //return view('beneficiarios/index', compact('beneficiarios'));

    }
    
}
