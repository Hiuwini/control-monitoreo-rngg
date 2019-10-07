<?php

namespace App\Http\Controllers;

use App\Tipobeneficiarios;
use App\Beneficiarios;
use Illuminate\Http\Request;

class TipobeneficiariosController extends Controller
{
	    public function create()
    {
        $tipobeneficiarios = Tipobeneficiarios::all();
        $beneficiarios = Beneficiarios::all();
        //return view('beneficiarios/index', compact('beneficiarios'));

    }
    
}