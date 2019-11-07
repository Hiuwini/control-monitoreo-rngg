<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteNombreActividadController extends Controller
{
     public function generar()
	{
		$actividades = \DB::table('actividades')
		->select('actividades.nombre')
		-> get();
		//dd($projects);

		$view = \View::make('reporteNombreActividad.index', compact('actividades'))->render();
    		$reporteNombreActividad = \App::make('dompdf.wrapper');
    		$reporteNombreActividad->loadHTML($view);
    		return $reporteNombreActividad->stream('informe'.'.pdf');
	}
}
