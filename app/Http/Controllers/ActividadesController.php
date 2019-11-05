<?php

namespace App\Http\Controllers;

use App\Actividades;
use Illuminate\Http\Request;
use App\Project;
use App\Indicator;

class ActividadesController extends Controller
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
        $actividades = Actividades::orderBy('id','ASC')->paginate(10);
        $projects = Project::join('users','users.id','=','projects.user_id')
        ->select('projects.*','users.firstname','users.lastname')
        ->get();
        return view('actividades/index', compact('actividades'),compact('projects'))->with('i',(request()->input('page', 1) - 1) *10);

        //
    }

    public function events($indicator)
    {
        $actividades = Actividades::where('indicator_id','=',$indicator)->get();
        $i = Indicator::find($indicator);
        $project = Project::find($i->id_proyecto);
        return view('actividades.events')->with('actividades',$actividades)->with('i',$i)->with('project',$project);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($indicator)
    {
        $indicator = Indicator::find($indicator);
        $project = Project::find($indicator->id_proyecto);
        return view('actividades.create', compact('project','indicator'));
        
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
        $this->validate($request, 
        ['nombre' => 'required', 
        'descripcion' => 'required',
        'fecha'=> 'required',
        'cantidadProyectada'=> 'required',
        'duracion'=> 'required']);
        

        $actividades = new Actividades();
 
        $actividades->nombre = request('nombre');
        $actividades->descripcion = request('descripcion');
        $actividades->fecha = request('fecha');
        $actividades->cantidadProyectada = request('cantidadProyectada');
        $actividades->duracion = request('duracion');
        $actividades->indicator_id = request('indicator_id');        
        $actividades->id_proyecto = request('id_proyecto');
        $actividades->save();
 
        $i = Indicator::find($actividades->indicator_id);

        $i->accumulated = $i->accumulated + 1;
        $i->percentage = ($i->accumulated / $i->goal)*100;
        $i->update();

        return redirect("/events/$actividades->indicator_id");
        //
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
        $actividades = Actividades::findOrFail($id);
        $projects = Project::join('users','users.id','=','projects.user_id')
        ->select('projects.*','users.firstname','users.lastname')
        ->get();     
        return view('actividades.edit',compact('actividades','projects'));
        //
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
         
        $this->validate($request,[ 'nombre'=>'required', 'fecha'=>'required']);
             
        $form_data = array('nombre' => $request->nombre,
                           'fecha'=> date("Y-m-d", strtotime( $request->fecha ) ),
                           );
        Actividades::whereId($id)->update($form_data);
        
        $indicator = Actividades::find($id);
        $indicator = $indicator->indicator_id;
        
        return redirect("/events/$indicator");
          
    
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {//
        $actividades = Actividades::findOrFail($id);
        $indicator = $actividades->indicator_id;
        
        $i = Indicator::find($actividades->indicator_id);
        $i->accumulated = $i->accumulated - 1;
        $i->percentage = ($i->accumulated / $i->goal)*100;
        $i->update();
        
        $actividades->delete();
        return redirect("/events/$indicator");
    }
}
