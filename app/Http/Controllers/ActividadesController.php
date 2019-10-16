<?php

namespace App\Http\Controllers;

use App\Actividades;
use Illuminate\Http\Request;

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
        return view('actividades/index', compact('actividades'))->with('i',(request()->input('page', 1) - 1) *10);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividades.create');
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
        return view('actividades.edit',compact('actividades'));
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
         
        $form_data = array('nombre' => $request->nombre,
                            'descripcion' => $request->descripcion,
                            'fecha' => $request->fecha,
                            'cantidadProyectada' => $request->cantidadProyectada,
                            'duracion' => $request->duracion);

        Actividades::whereId($id)->update($form_data);
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
