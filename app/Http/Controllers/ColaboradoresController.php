<?php

namespace App\Http\Controllers;

use App\Colaboradores;
use App\Generos;
use App\Ubicacion;

use Illuminate\Http\Request;

class ColaboradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$colaboradores = Colaboradores::all();
        $colaboradores = Colaboradores::orderBy('id','ASC')->paginate(10);
        return view('colaboradores/index', compact('colaboradores'))->with('i',(request()->input('page', 1) - 1) *10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Generos::all();
       
       return view('colaboradores.create', compact('generos'));

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
        $this->validate($request, 
        ['nombrecolaborador' => 'required',
         'apellidocolaborador' => 'required',
         'direccioncolaborador' => 'required',
         'telefonocolaborador' => 'required|numeric',
         'emailcolaborador' => 'required',
         'genero'=> 'required',
         'fechanacimiento' => 'required|date',
         'nivelacademico' => 'required',
         'titulo' => 'required']);
        
        $colaboradores = new Colaboradores();
 
        $colaboradores->nombrecolaborador = request('nombrecolaborador');
        $colaboradores->apellidocolaborador = request('apellidocolaborador');
        $colaboradores->direccioncolaborador = request('direccioncolaborador');
        $colaboradores->telefonocolaborador = request('telefonocolaborador');
        $colaboradores->emailcolaborador = request('emailcolaborador');
        $colaboradores->genero = request('genero');
        $colaboradores->fechanacimiento = request('fechanacimiento');
        $colaboradores->nivelacademico = request('nivelacademico');
        $colaboradores->titulo = request('titulo');
        
        $colaboradores->save();
 
        return redirect('/colaboradores');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colaboradores = Colaboradores::findOrFail($id);
         return view('colaboradores.edit',compact('colaboradores'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        
        $form_data = array('nombrecolaborador' => $request->nombrecolaborador,
                            'apellidocolaborador' => $request->apellidocolaborador,
                            'direccioncolaborador' => $request->direccioncolaborador,
                            'telefonocolaborador' => $request->telefonocolaborador,
                            'emailcolaborador' => $request->emailcolaborador,
                            'genero' => $request->genero,
                            'fechanacimiento' => $request->fechanacimiento,
                            'nivelacademico' => $request->nivelacademico,
                            'titulo' => $request->titulo);


        //$beneficiarios = Beneficiarios::findOrFail($id);

        Colaboradores::whereId($id)->update($form_data);
        return redirect('colaboradores')->with('success','colaborador actualizado correctamente!');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $colaboradores = Colaboradores::findOrFail($id);
        $colaboradores->delete();
       return redirect('colaboradores')->with('success', 'Contact dELETE!');
    }
}



