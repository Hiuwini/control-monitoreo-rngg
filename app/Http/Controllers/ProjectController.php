<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use App\CInstitutional;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::join('users','users.id','=','projects.user_id')
            ->select('projects.*','users.firstname','users.lastname')
            ->get();
        return view('projects.index')->with('p',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ci = CInstitutional::where('status','=',1)->get();
        $user = User::where('status','=',1)->get();
        return view('projects.create')->with('u',$user)->with('ci',$ci);
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
        $project = new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->date_begin = date("Y-m-d", strtotime( $request->date_begin ) );
        $project->date_end = date("Y-m-d", strtotime( $request->date_end ) );
        $project->user_id = $request->user_id;
        $project->c_institutional_id = $request->ci;
        $project->save();

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, $id)
    {
        //
        $projects = Project::join('users','users.id','=','projects.user_id')
            ->where('c_institutional_id','=',$id)
            ->select('projects.*','users.firstname','users.lastname')
            ->get();
        return view('projects.index')->with('p',$projects);
    }

    public function admin(Project $project, $id)
    {
        //
        $projects = Project::join('users','users.id','=','projects.user_id')
            ->where('projects.id','=',$id)
            ->select('projects.*','users.firstname','users.lastname')
            ->get();
        return view('projects.admin')->with('p',$projects);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users = User::where('status','=',1)->get();
        $ci = CInstitutional::where('status','=',1)->get();
        $project = Project::find($id);
        return view('projects.update')->with('p',$project)->with('u',$users)->with('ci',$ci);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        $project = Project::find($request->id);

        $project->name = $request->name;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->date_begin = date("Y-m-d", strtotime( $request->date_begin ) );
        $project->date_end = date("Y-m-d", strtotime( $request->date_end ) );
        $project->user_id = $request->user_id;  
        $project->c_institutional_id = $request->ci;        
        $project->update();

        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $project = Project::find($id);
        $project->delete();
        return redirect('/projects');
    }
}