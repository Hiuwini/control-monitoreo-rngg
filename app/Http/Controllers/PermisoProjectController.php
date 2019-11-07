<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\PermisoProject;
use Illuminate\Support\Facades\DB;

class PermisoProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //Cargando todos los usuarios
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $projects = Project::all();
        foreach($projects as $project)
        {
            $nombrecontrol='project' . "$project->id";
            if(!empty(request($nombrecontrol))){
                $permisoProyecto = new PermisoProject;
                $permisoProyecto->user_id = $request->userid;
                $permisoProyecto->project_id = $project->id;
                $permisoProyecto->save();                        
            }
        }
        return redirect('/permisos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);  //Obtenemos la info del usuario que seleccionaron     
        $projects = Project::all();        //Obtenemos todos los proyectos existentes
        $proyectosactuales=PermisoProject::where('user_id',$id)->get();
        if($proyectosactuales=='[]'){ //Si no hay proyectos asociados al usuario se muestra una vista diseñada para crear los permisos.
            return view('permisosprojects.edit')->with('user',$user)->with('projects',$projects);
        }
        else{ //Enviamos los proyectos actuales que puede ver el usuario
        
        return view('permisosprojects.edit')->with('user',$user)->with('projects',$projects)->with('proyectosactuales',$proyectosactuales);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //se eliminan todos los permisos y se reescriben nuevamente
        $permiso=PermisoProject::where('user_id',$id)->delete();
        //guardamos
        $projects = Project::all();
        foreach($projects as $project)
        {
            $nombrecontrol='project' . "$project->id";
            if(!empty(request($nombrecontrol))){
                $permisoProyecto = new PermisoProject;
                $permisoProyecto->user_id = $request->userid;
                $permisoProyecto->project_id = $project->id;
                $permisoProyecto->save();                        
            }
        }
        return redirect('/permisos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
