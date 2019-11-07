<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\Beneficiarios;
use App\Permiso;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Sending all projects on database
       $idUser=Auth::id(); //obteniendo el id del usuario
       $idRol=Permiso::select('rol_id')->where('user_id','=',$idUser)->get();

        $cantbeneficiarios=DB::table('beneficiarios')->count();
        
        if($idRol[0]->rol_id== 1 || $idRol[0]->rol_id == 2){
            $projects=Project::all();
            $cantprojects = DB::table('projects')->count();
        
        }
        else{
        $projects=Project::where('user_id','=',$idUser)->get();
        $cantprojects = DB::table('projects')
        ->where('user_id','=',$idUser)
        ->count();
        
        }

        //OBTENIENDO COUNT DE RANGOS
        $rangouno=Beneficiarios::select('beneficiarios')
        ->where('rangoedad','=','Menor de 18')
        ->count();

        $rangodos=Beneficiarios::select('beneficiarios')
        ->where('rangoedad','=','19 - 30')
        ->count();

        $rangotres=Beneficiarios::select('beneficiarios')
        ->where('rangoedad','=','31 - 49')
        ->count();

        $rangocuatro=Beneficiarios::select('beneficiarios')
        ->where('rangoedad','=','50 - 60')
        ->count();


        $rangocinco=Beneficiarios::select('beneficiarios')
        ->where('rangoedad','=','Mayor de 60')
        ->count();

        $mayor=max($rangouno,$rangodos,$rangotres,$rangocuatro,$rangocinco);



        return view('dashboard.dashboardv1')->with('cantbeneficiarios',$cantbeneficiarios)
        ->with('cantprojects',$cantprojects)
        ->with('projects',$projects)
        ->with('rangouno',$rangouno)
        ->with('rangodos',$rangodos)
        ->with('rangotres',$rangotres)
        ->with('rangocuatro',$rangocuatro)
        ->with('rangocinco',$rangocinco)
        ->with('mayor',$mayor);
    }
    
    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
