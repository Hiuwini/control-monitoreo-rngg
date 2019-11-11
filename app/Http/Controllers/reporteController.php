<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Permiso;
use App\Beneficiarios;
use App\Beneficio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class reporteController extends Controller
{

    public function generar($id)
    {
            $beneficiarios = Beneficio::join('beneficiarios','beneficiarios.id','=','beneficiario_id')
            ->where('indicator_id','=',$request->idindicator)
            ->select('beneficios.id',DB::raw('beneficiarios.id as beneficiario_id'),'beneficiarios.nombrebeneficiario','beneficiarios.apellidobeneficiario','beneficiarios.genero','beneficiarios.rangoedad','beneficiarios.nombreubicacion','beneficiarios.dpicui','beneficiarios.telefono','beneficiarios.emailbeneficiario')
            ->get();

            $view = \View::make('ReporteUsuario.index', compact('beneficiarios'))->render();
            $ReporteUsuario = \App::make('dompdf.wrapper');
            $ReporteUsuario->loadHTML($view);
            return $ReporteUsuario->stream('informe'.'.pdf');
            
            
    }

    public function index(Request $request)
    {
 //Sending all projects on database
 $idUser=Auth::id(); //obteniendo el id del usuario
 $idRol=Permiso::select('rol_id')->where('user_id','=',$idUser)->get();
  
  if($idRol[0]->rol_id== 1 || $idRol[0]->rol_id == 2){
      $projects=Project::all();  
  }
  else{
  $projects=Project::where('user_id','=',$idUser)->get();
  $cantprojects = DB::table('projects')
  ->where('user_id','=',$idUser)
  ->count();
  
  }
  $idindicador=$request->idindicator;
  $idproject=$request->idproject;
  //Obteniendo los beneficiarios que esten registrado en la tabla beneficios y que tengan el indicador que selecciono el usuario
  $beneficiarios = Beneficio::join('beneficiarios','beneficiarios.id','=','beneficiario_id')
            ->where('indicator_id','=',$idindicador)
            ->select('beneficios.id',DB::raw('beneficiarios.id as beneficiario_id'),'beneficiarios.nombrebeneficiario','beneficiarios.apellidobeneficiario','beneficiarios.genero','beneficiarios.rangoedad','beneficiarios.nombreubicacion','beneficiarios.dpicui','beneficiarios.telefono','beneficiarios.emailbeneficiario')
            ->get();

  //Retornamos la vista ya con los datos anclados
        return view('reportes.listado_reportes')->with('projects',$projects)
        ->with('indicador',$idindicador)
        ->with('beneficiarios',$beneficiarios);
    }

}
