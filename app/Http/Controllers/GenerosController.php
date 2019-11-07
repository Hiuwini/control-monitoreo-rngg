<?php

namespace App\Http\Controllers;

use App\Generos;
use App\Beneficiarios;
use App\Beneficio;

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
    public function indicador($indicador)
    {
        $cantMasculino=Beneficio::join('beneficiarios','beneficiarios.id',"=",'beneficios.beneficiario_id')
        ->whereRaw("beneficiarios.genero = 'Masculino' and beneficios.indicator_id = ".$indicador)->count();
        $cantFemenina=Beneficio::join('beneficiarios','beneficiarios.id',"=",'beneficios.beneficiario_id')
        ->whereRaw("beneficiarios.genero = 'Femenino' and beneficios.indicator_id = ".$indicador)->count();
        $rangoUno=Beneficio::join('beneficiarios','beneficiarios.id',"=",'beneficios.beneficiario_id')
        ->whereRaw("beneficiarios.rangoedad = 'Menor de 18' and beneficios.indicator_id = ".$indicador)->count();

        $rangoDos=Beneficio::join('beneficiarios','beneficiarios.id',"=",'beneficios.beneficiario_id')
        ->whereRaw("beneficiarios.rangoedad = '18 - 30' and beneficios.indicator_id = ".$indicador)->count();

        $rangoTres=Beneficio::join('beneficiarios','beneficiarios.id',"=",'beneficios.beneficiario_id')
        ->whereRaw("beneficiarios.rangoedad = '31 - 49' and beneficios.indicator_id = ".$indicador)->count();

        $rangoCuatro=Beneficio::join('beneficiarios','beneficiarios.id',"=",'beneficios.beneficiario_id')
        ->whereRaw("beneficiarios.rangoedad = '50 - 60' and beneficios.indicator_id = ".$indicador)->count();

        $rangoCinco=Beneficio::join('beneficiarios','beneficiarios.id',"=",'beneficios.beneficiario_id')
        ->whereRaw("beneficiarios.rangoedad = 'Mayor de 60' and beneficios.indicator_id = ".$indicador)->count();


        $maxGenero=max($cantMasculino,$cantFemenina);
        $maximo=max($rangoUno,$rangoDos,$rangoTres,$rangoCuatro,$rangoCinco);
        return view('graficas.graficas')
        ->with('cantFemenina',$cantFemenina)
        ->with('cantMasculino',$cantMasculino)
        ->with('maxGenero',$maxGenero)
        ->with('rangoUno',$rangoUno)
        ->with('rangoDos',$rangoDos)
        ->with('rangoTres',$rangoTres)
        ->with('rangoCuatro',$rangoCuatro)
        ->with('rangoCinco',$rangoCinco)
        ->with('maximo',$maximo);
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
