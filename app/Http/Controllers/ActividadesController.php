<?php

namespace App\Http\Controllers;

use App\Actividades;
use Illuminate\Http\Request;
use App\Project;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividades::orderBy('id','ASC')->paginate(10);
        $projects = Project::join('users','users.id','=','projects.user_id')
        ->select('projects.*','users.firstname','users.lastname')
        ->get();
        return view('actividades/index', compact('actividades'),compact('projects'))->with('i',(request()->input('page', 1) - 1) *10);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::join('users','users.id','=','projects.user_id')
        ->select('projects.*','users.firstname','users.lastname')
        ->get();
        return view('actividades.create', compact('projects'));
        
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
        'duracion'=> 'required',
        'id_proyecto'=> 'required']);
        
        $actividades = new Actividades();
 
        $actividades->nombre = request('nombre');
        $actividades->descripcion = request('descripcion');
        $actividades->fecha = request('fecha');
        $actividades->cantidadProyectada = request('cantidadProyectada');
        $actividades->duracion = request('duracion');
        $actividades->id_proyecto = request('id_proyecto');
        $actividades->save();
 
        return redirect('/actividades');
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
         
        $this->validate($request,[ 'nombre'=>'required', 'fecha_limite'=>'required', 'id_proyecto'=>'required']);
             
        $form_data = array('nombre' => $request->nombre,
                           'fecha_limite'=> Carbon::createFromFormat('Y-m-d', $request->fecha_limite)->toDateString(),
                           'id_proyecto' => $request->id_proyecto,
                           'estado' => (( $request->estado == 'on') ? true:false )
                       );
                       Actividades::whereId($id)->update($form_data);
       // $form_data = array('nombre' => $request->nombre,
         //                   'descripcion' => $request->descripcion,
           //                 'fecha' => $request->fecha,
             //               'cantidadProyectada' => $request->cantidadProyectada,
               //             'duracion' => $request->duracion);
        
        
        return redirect('actividades')->with('success','Actividad actualizada correctamente!');
          
    
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
        $actividades->delete();
       return redirect('actividades')->with('success', 'Contact dELETE!');
    }
}
