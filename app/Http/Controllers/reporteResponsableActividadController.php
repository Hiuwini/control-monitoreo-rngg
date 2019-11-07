<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteResponsableActividadController extends Controller
{
      public function generar()
	{
		$projects = \DB::table('projects')
		-> join('users', 'users.id' , '=' , 'projects.user_id')
		-> join('actividades', 'actividades.id' , '=' , 'projects.id')
		->select('users.firstname as User','actividades.nombre as Act')
		-> get();
		//dd($projects);

		$view = \View::make('reporteResponsableActividad.index', compact('projects'))->render();
    		$reporteResponsableActividad = \App::make('dompdf.wrapper');
    		$reporteResponsableActividad->loadHTML($view);
    		return $reporteResponsableActividad->stream('informe'.'.pdf');
	}
}
