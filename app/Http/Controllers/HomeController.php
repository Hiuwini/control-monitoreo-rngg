<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
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
        return view('dashboard.dashboardv1')->with('cantbeneficiarios',$cantbeneficiarios)
        ->with('cantprojects',$cantprojects)
        ->with('projects',$projects);
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
