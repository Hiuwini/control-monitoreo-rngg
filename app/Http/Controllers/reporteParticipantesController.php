<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteParticipantesController extends Controller
{
     public function generar()
	{
		$beneficiarios = \DB::table('beneficiarios')
		-> join('participantes', 'participantes.id' , '=' , 'beneficiarios.id')
		->select('beneficiarios.nombrebeneficiario','beneficiarios.apellidobeneficiario','beneficiarios.genero','beneficiarios.rangoedad')
		-> get();
		//dd($projects);

		$view = \View::make('reporteParticipantes.index', compact('beneficiarios'))->render();
    		$reporteParticipantes = \App::make('dompdf.wrapper');
    		$reporteParticipantes->loadHTML($view);
    		return $reporteParticipantes->stream('informe'.'.pdf');
	}
}
