<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
class reporteMenorEdadController extends Controller
{
     public function generar()
	{
		$beneficiarios = DB::table('beneficiarios as be')
		->select(DB::raw('count(be.id) as cantidad'))
		->where ('rangoedad', '<=' , '17')
        ->first();

    	$view = \View::make('reporteMenorEdad.index', compact('beneficiarios'))->render();
    	$reporteMenorEdad = \App::make('dompdf.wrapper');
    	$reporteMenorEdad->loadHTML($view);
    	return $reporteMenorEdad->stream('informe'.'.pdf');
	}
}
