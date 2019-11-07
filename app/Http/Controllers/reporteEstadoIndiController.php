<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteEstadoIndiController extends Controller
{
      public function generar()
	{
		$indicators = \DB::table('indicators')
		->select('indicators.name','indicators.status')
		-> get();
		//dd($projects);

		$view = \View::make('reporteEstadoIndi.index', compact('indicators'))->render();
    		$reporteEstadoIndi = \App::make('dompdf.wrapper');
    		$reporteEstadoIndi->loadHTML($view);
    		return $reporteEstadoIndi->stream('informe'.'.pdf');
	}
}
