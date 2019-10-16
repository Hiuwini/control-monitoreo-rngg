<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Meta;
use Carbon\Carbon;
use App\Project;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $metas = Meta::orderBy('id','ASC')->paginate(10);
        $projects = Project::join('users','users.id','=','projects.user_id')
        ->select('projects.*','users.firstname','users.lastname')
        ->get();
        //$roles = Roles::latest()->paginate(5);
        return view('metas.index', compact('metas'),compact('projects'))->with('i',(request()->input('page', 1) - 1) *10);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$productos = Producto::all();
        //implementando proyectos
        $projects = Project::join('users','users.id','=','projects.user_id')
        ->select('projects.*','users.firstname','users.lastname')
        ->get();
        return view('metas.create', compact('projects'));
        
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
        $this->validate($request,[ 'nombre'=>'required', 'fecha_limite'=>'required',  'id_proyecto'=>'required']);
        //Meta::create($request->all());

       
        $meta = new Meta(); 
        $meta->nombre = request('nombre');        
        $meta->fecha_limite= Carbon::createFromFormat('Y-m-d', $request->fecha_limite)->toDateString();
        $meta->id_proyecto= request('id_proyecto');
        $meta->estado = ( $request->estado == 'on') ? true:false;
        $meta->save();      

        return redirect()->route('metas.index')->with('success','Meta agregada satisfactoriamente');
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
        $metas = Meta::findOrFail($id);
        //$productos = Producto::all();  Incorporando metas a proyectos.
        $projects = Project::join('users','users.id','=','projects.user_id')
        ->select('projects.*','users.firstname','users.lastname')
        ->get();     
         return view('metas.edit',compact('metas','projects'));
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
        //
        $this->validate($request,[ 'nombre'=>'required', 'fecha_limite'=>'required', 'id_proyecto'=>'required']);
             
             $form_data = array('nombre' => $request->nombre,
                                'fecha_limite'=> Carbon::createFromFormat('Y-m-d', $request->fecha_limite)->toDateString(),
                                'id_proyecto' => $request->id_proyecto,
                                'estado' => (( $request->estado == 'on') ? true:false )
                            );
                            Meta::whereId($id)->update($form_data);

             return redirect('metas')->with('success','Meta Actualizada correctamente!');
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
        $metas = Meta::find($id);
        $metas->delete();
        return redirect('/metas');
    }
}
