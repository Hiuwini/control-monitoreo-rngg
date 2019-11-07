<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteBeneficiarioController extends Controller
{
       public function generar()
	{
		$beneficiarios = \DB::table('beneficiarios')
		->select('nombrebeneficiario','apellidobeneficiario', 'estado') 
		-> get();
		//dd($projects);

		$view = \View::make('reporteBeneficiario.index', compact('beneficiarios'))->render();
    		$reporteBeneficiario = \App::make('dompdf.wrapper');
    		$reporteBeneficiario->loadHTML($view);
    		return $reporteBeneficiario->stream('informe'.'.pdf');
	}
}
