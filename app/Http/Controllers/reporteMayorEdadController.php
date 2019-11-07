<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class reporteMayorEdadController extends Controller
{
        public function generar()
	{
		$beneficiarios = DB::table('beneficiarios as be')
		->select(DB::raw('count(be.id) as cantidad'))
		->where ('rangoedad', '>=' , '18')
        ->first();

    	$view = \View::make('reporteMayorEdad.index', compact('beneficiarios'))->render();
    	$reporteMayorEdad = \App::make('dompdf.wrapper');
    	$reporteMayorEdad->loadHTML($view);
    	return $reporteMayorEdad->stream('informe'.'.pdf');
	}
}
