<?php

namespace App\Http\Controllers;

use App\Beneficiarios;
use App\Beneficio;
use App\TipoGestor;
use App\Generos;
use App\Tipobeneficiarios;
use App\Indicator;

use App\Participantes;
use App\Actividades;
use Illuminate\Http\Request;
 
class BeneficiariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$beneficiarios = Beneficiarios::all();
        $beneficiarios = Beneficiarios::orderBy('id','ASC')->paginate(10);
        return view('beneficiarios/index', compact('beneficiarios'))->with('i',(request()->input('page', 1) - 1) *10);       
           

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tiposgestores= TipoGestor::all();     
        $generos = Generos::all();
        $tipobeneficiarios = Tipobeneficiarios::all();
         
      
       return view('beneficiarios.create',compact('tiposgestores') );
       

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
        ['nombrebeneficiario' => 'required', 
        'apellidobeneficiario' => 'required',
        'genero'=> 'required',
        'rangoedad'=> 'required',
        'nombreubicacion'=> 'required',
        'dpicui'=> 'required',
        'telefono' => 'required|numeric',
        'emailbeneficiario'=> 'required'
        ]);
        
        $beneficiarios = new Beneficiarios();
 
        $beneficiarios->nombrebeneficiario = request('nombrebeneficiario');
        $beneficiarios->apellidobeneficiario = request('apellidobeneficiario');
        $beneficiarios->genero = request('genero');
        //$beneficiarios->estado = request('status') == 'checked' ? true:false;  
        $beneficiarios->rangoedad = request('rangoedad');
        $beneficiarios->nombreubicacion = request('nombreubicacion');
        $beneficiarios->dpicui = request('dpicui');
        $beneficiarios->telefono = request('telefono');
        $beneficiarios->emailbeneficiario = request('emailbeneficiario');
        //$beneficiarios->indicador = request('indicator_id');
        $beneficiarios->tipobeneficiario = request('tipobeneficiario');

        if ( request('status') == 'checked' )
            $beneficiarios->id_tipogestor=request('gestor');

        $beneficiarios->save();
 
        if(request('type') == 'indicador'){
            $beneficio = new Beneficio;
            $beneficio->indicator_id = request('indicator_id');
            $beneficio->beneficiario_id = $beneficiarios->id;
            $beneficio->save();
            
            $indicator_id = request('indicator_id');
            
            $indicador = Indicator::find($indicator_id);
            $indicador->accumulated = $indicador->accumulated + 1;

            $indicador->percentage = ($indicador->accumulated / $indicador->goal)*100;

            $indicador->update();
    
            return redirect("/beneficios/$indicator_id");

        } else {
            //Agregar el codigo para una participación
            $participante= new Participantes;

            $participante->actividad_id=request('actividad_id');
            $participante->beneficiario_id = $beneficiarios->id;
            
            $participante->save();
            $actividad_id = request('actividad_id');
            return redirect("/participantes/$actividad_id");

        }


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
        $beneficiarios = Beneficiarios::findOrFail($id);
         return view('beneficiarios.edit',compact('beneficiarios'));

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

        
        $form_data = array('nombrebeneficiario' => $request->nombrebeneficiario,
                            'apellidobeneficiario' => $request->apellidobeneficiario,
                            'genero' => $request->genero,
                            'estado' => (( $request->estado == 'on') ? true:false ),
                            'rangoedad' => $request->rangoedad,
                            'nombreubicacion' => $request->nombreubicacion,
                            'dpicui' => $request->dpicui,
                            'telefono' => $request->telefono,
                            'emailbeneficiario' => $request->emailbeneficiario,
                            'tipobeneficiario' => $request->tipobeneficiario);


        //$beneficiarios = Beneficiarios::findOrFail($id);

        Beneficiarios::whereId($id)->update($form_data);
        return redirect('beneficiarios')->with('success','Beneficiario actualizado correctamente!');
          
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
        $beneficiarios = Beneficiarios::findOrFail($id);
        $beneficiarios->delete();
       return redirect('beneficiarios')->with('success', 'Contact dELETE!');
    }
}

