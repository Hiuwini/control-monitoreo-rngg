<?php

namespace App\Http\Controllers;

use App\Generos;
use App\Beneficiarios;

use Illuminate\Http\Request;

class GenerosController extends Controller
{
	    public function index()
    {
        $generos = Generos::all();
        $beneficiarios = Beneficiarios::all();

        $cantMasculino=Beneficiarios::select('genero')->where('genero','=','Masculino')->count();
        $cantFemenina=Beneficiarios::select('genero')->where('genero','=','Femenino')->count();
        $rangoUno=Beneficiarios::select('rangoedad')->where('rangoedad','=','Menor de 18')->count();
        $rangoDos=Beneficiarios::select('rangoedad')->where('rangoedad','=','18 - 30')->count();
        $rangoTres=Beneficiarios::select('rangoedad')->where('rangoedad','=','31 - 49')->count();
        $rangoCuatro=Beneficiarios::select('rangoedad')->where('rangoedad','=','50 - 60')->count();
        $rangoCinco=Beneficiarios::select('rangoedad')->where('rangoedad','=','Mayor de 60')->count();
        $maxGenero=max($cantMasculino,$cantFemenina);
        $maximo=max($rangoUno,$rangoDos,$rangoTres,$rangoCuatro,$rangoCinco);

        return view('graficas.genero')
        ->with('cantFemenina',$cantFemenina)
        ->with('cantMasculino',$cantMasculino)
        ->with('rangoUno',$rangoUno)
        ->with('rangoDos',$rangoDos)
        ->with('rangoTres',$rangoTres)
        ->with('rangoCuatro',$rangoCuatro)
        ->with('rangoCinco',$rangoCinco)
        ->with('maximo',$maximo)
        ->with('maxGenero',$maxGenero);
    }
/*
    public function indexDos($indicador)
    {
        $cantMasculinoDos=Beneficiarios::select('genero')->whereRaw("genero = 'Masculino' and id_Indicador ="$indicador)->count();

        return view('graficas.genero')
        ->with('cantMasculinoDos',$cantMasculinoDos);
    }
*/
    
}
