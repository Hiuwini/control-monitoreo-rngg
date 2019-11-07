<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;


class reporteParticipantesEventoController extends Controller
{
      public function generar()
	{
		$participantes = \DB::table('participantes')
		-> join('beneficiarios', 'beneficiarios.id' , '=' , 'participantes.beneficiario_id')
		-> join('actividades', 'actividades.id', '=', 'participantes.id')
		->select(DB::raw('count(beneficiarios.nombrebeneficiario) as cantidad'),'actividades.nombre')
		->groupBy('actividades.nombre')
		->first();

		$view = \View::make('reporteParticipantesEvento.index', compact('participantes'))->render();
    		$reporteParticipantesEvento = \App::make('dompdf.wrapper');
    		$reporteParticipantesEvento->loadHTML($view);
    		return $reporteParticipantesEvento->stream('informe'.'.pdf');
	}
}
