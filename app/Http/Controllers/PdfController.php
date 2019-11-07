<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Http\Request;
Use App\Http\Controller\Controllers;
Use App\User; //Datos a mostrar en la tabla

class PdfController extends Controller
{
    public function index()
    {
    	return view("listado_reportes");
    }

    public function crearDPF($datos,$vistaurl,$tipo)
    {
    	$data = $datos;
    	$date = date('Y-m-d');
    	$view = \View::make($vistaurl, compact('data', 'date'))->render();
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf -> loadHTML($view);

    	if($tipo==1){return $pdf->stream('reporte');}
    	 if($tipo==2){return $pdf->download('reporte.pdf');}
    }

    public function crear_reporte_porusuario($tipo)
    {
    	$vistaurl="reporte_por_usuario";
    	$usuarios=User::all();

    	return $this -> crearDPF($usuarios, $vistaurl,$tipo);

    }
}
