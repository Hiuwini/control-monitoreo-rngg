<?php

namespace App\Http\Controllers;

use App\Etnias;
use App\Beneficiarios;
use Illuminate\Http\Request;

class EtniasController extends Controller
{
	    public function create()
    {
        $etnias = Etnias::all();
        $beneficiarios = Beneficiarios::all();
        //return view('beneficiarios/index', compact('beneficiarios'));

    }
    
}