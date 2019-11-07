<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteProyectosActController extends Controller
{
	public function generar()
	{
		$projects = \DB::table('projects')
		-> join('users', 'users.id' , '=' , 'projects.user_id')
		->select('projects.id','projects.name','projects.description','projects.status','projects.date_begin','projects.date_end','users.firstname as usuario')
		->where ('projects.status', '=' , '1') 
		->orderby ('projects.id', 'asc' )
		-> get();
		//dd($projects);

		$view = \View::make('ReporteProyectosAct.index', compact('projects'))->render();
    		$ReporteProyectosAct = \App::make('dompdf.wrapper');
    		$ReporteProyectosAct->loadHTML($view);
    		return $ReporteProyectosAct->stream('informe'.'.pdf');
	}

}
