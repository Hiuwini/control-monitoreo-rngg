<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class reporteCantidadGGController extends Controller
{
      public function generar()
	{


		$beneficiarios = \DB::table('beneficiarios')
		-> join('tipogestores', 'tipogestores.id' , '=' , 'beneficiarios.id')
		-> join('participantes', 'participantes.id', '=', 'beneficiarios.id')
		-> join('actividades', 'actividades.id', '=', 'participantes.id')
		->select(DB::raw('count(beneficiarios.id_tipogestor) as cantidad'),'actividades.nombre as acn')
		//->groupBy('beneficiarios.nombre')
		->groupBy('actividades.nombre')
		->first();
		//->first();
		//-> get();
		//dd($projects);

		$view = \View::make('reporteCantidadGG.index', compact('beneficiarios'))->render();
    		$reporteCantidadGG = \App::make('dompdf.wrapper');
    		$reporteCantidadGG->loadHTML($view);
    		return $reporteCantidadGG->stream('informe'.'.pdf');
	}
}
