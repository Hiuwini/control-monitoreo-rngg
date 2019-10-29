<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoGestor;

class TipoGestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Listado de todos los tipos de Gestores
        
        $tiposgestores=TipoGestor::all();
        return view('tipogestores.index')->with('tipogestores',$tiposgestores);   
    
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipogestores.create');
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
        $tipoGestor = new TipoGestor;
        $tipoGestor->nombre = $request->nombre;
        $tipoGestor->save();

        return redirect('/tipogestores');
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
        $tiposgestores=TipoGestor::find($id);
        return  view('tipogestor.index',compact('tiposgestores'));
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
        $tipogestor = tipoGestor::find($id);
        return view('tipogestores.update')->with('tipogestor',$tipogestor)->with('id',$id);
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
        $tiposgestores = tipoGestor::find($request->id);

        $tiposgestores->nombre = $request->nombre;
        $tiposgestores->update();

        return redirect('/tipogestores');
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
        $tipogestor = tipoGestor::find($id);
        $tipogestor->delete();
        return redirect('/tipogestores');
    }
}
