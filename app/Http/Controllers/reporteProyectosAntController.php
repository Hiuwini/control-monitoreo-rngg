<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteProyectosAntController extends Controller
{
     public function generar()
	{
		$projects = \DB::table('projects')
		->select('projects.name')
		->where ('projects.status', '=' , '0') 
		->orderby ('projects.id', 'asc' )
		-> get();
		//dd($projects);

		$view = \View::make('reporteProyectosAnt.index', compact('projects'))->render();
    		$reporteProyectosAnt = \App::make('dompdf.wrapper');
    		$reporteProyectosAnt->loadHTML($view);
    		return $reporteProyectosAnt->stream('informe'.'.pdf');
	}
}
