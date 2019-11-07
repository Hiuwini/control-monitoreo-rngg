<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteProyectoNoActController extends Controller
{
    public function generar()
	{
		$projects = \DB::table('projects')
		-> join('users', 'users.id' , '=' , 'projects.user_id')
		->select('projects.id','projects.name','projects.description','projects.status','projects.date_begin','projects.date_end','users.firstname as usuario')
		->where ('projects.status', '=' , '0') 
		->orderby ('projects.id', 'asc' )
		-> get();
		//dd($projects);

		$view = \View::make('reporteProyectoNoAct.index', compact('projects'))->render();
    		$reporteProyectoNoAct = \App::make('dompdf.wrapper');
    		$reporteProyectoNoAct->loadHTML($view);
    		return $reporteProyectoNoAct->stream('informe'.'.pdf');
	}
}
