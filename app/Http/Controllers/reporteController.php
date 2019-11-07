<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteController extends Controller
{

    public function generar()
    {
        $users = \DB::table('users')
        -> select(['id','firstname','lastname','username','email','phone','status','job'])
            ->get();
            $view = \View::make('ReporteUsuario.index', compact('users'))->render();
            $ReporteUsuario = \App::make('dompdf.wrapper');
            $ReporteUsuario->loadHTML($view);
            return $ReporteUsuario->stream('informe'.'.pdf');
            //dd($users);
            
    }

}
