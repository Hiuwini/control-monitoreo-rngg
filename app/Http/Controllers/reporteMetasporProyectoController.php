<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteMetasporProyectoController extends Controller
{
	public function generar()
    {
		$metas = \DB::table('metas')
		-> join('projects', 'projects.id' , '=' , 'metas.id_proyecto')
		->select('metas.nombre','projects.name')
		-> get();
		//dd($projects);

		$view = \View::make('reporteMetasporProyecto.index', compact('metas'))->render();
    		$reporteMetasporProyecto = \App::make('dompdf.wrapper');
    		$reporteMetasporProyecto->loadHTML($view);
    		return $reporteMetasporProyecto->stream('informe'.'.pdf');
	}
}
