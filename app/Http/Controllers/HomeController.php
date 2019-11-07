<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\Beneficiarios;
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
        $cantprojects = DB::table('projects')->count();
        $cantbeneficiarios=DB::table('beneficiarios')->count();
        $projects=Project::all();

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
    }
}
