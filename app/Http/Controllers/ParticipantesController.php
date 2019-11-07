<?php

namespace App\Http\Controllers;


use App\Actividades;
use App\Beneficiarios;
use App\Participantes;
use App\Indicator;
use App\Beneficio;

use App\Project;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ParticipantesController extends Controller
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
    public function index($id)
    {
        $actividad = Actividades::find($id);
        $i = Indicator::find($actividad->indicator_id);
        $project = Project::find($actividad->id_proyecto);
        $beneficiarios = Participantes::join('beneficiarios','beneficiarios.id','=','beneficiario_id')
        ->where('actividad_id','=',$id)
        ->select('participantes.id',DB::raw('beneficiarios.id as beneficiario_id'),'beneficiarios.nombrebeneficiario','beneficiarios.apellidobeneficiario','beneficiarios.genero','beneficiarios.rangoedad','beneficiarios.nombreubicacion')
        ->get();
        
        $ids = array();
            foreach($beneficiarios as $b){
                array_push($ids, $b->beneficiario_id);
            }
        $all = Beneficiarios::whereNotIn('id',$ids)->get();

        return view('participantes.index')->with('i',$i)->with('project',$project)
        ->with('beneficiarios',$beneficiarios)->with('actividad',$actividad)->with('all',$all);
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
    public function store(Request $request, $ids)
    {
        $ids = json_decode($ids);

        $actividad_id = $ids[0];
        
        
        for ($i = 1; $i<=( count($ids) -1 ); $i++){
            $participante = new Participantes;
            $participante->actividad_id = $actividad_id;
            $participante->beneficiario_id = $ids[$i];
            $participante->save();
         
        }

        return "LISTO";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actividades $actividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividades $actividades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividades $actividades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividades $actividades, $id, $actividad)
    {
        //
        $participante = Participantes::find($id);
        $participante->delete();

        return redirect("/participantes/$actividad");
    }
}
