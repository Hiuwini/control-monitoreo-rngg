<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteActiporProyectoController extends Controller
{
      public function generar()
	{
		$actividades = \DB::table('actividades')
		-> join('projects', 'projects.id' , '=' , 'actividades.id_proyecto')
		->select('actividades.nombre as acn','projects.name as actividad')
		->get();
	

		$view = \View::make('reporteActiporProyecto.index', compact('actividades'))->render();
    		$reporteActiporProyecto = \App::make('dompdf.wrapper');
    		$reporteActiporProyecto->loadHTML($view);
    		return $reporteActiporProyecto->stream('informe'.'.pdf');
	}
}
