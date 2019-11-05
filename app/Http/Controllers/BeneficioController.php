<?php

namespace App\Http\Controllers;

use App\Beneficio;
use App\Indicator;
use App\Project;
use App\Beneficiarios;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BeneficioController extends Controller
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
        //
        $i = Indicator::find($id);
        $project = Project::find($i->id_proyecto);
        $beneficiarios = Beneficio::join('beneficiarios','beneficiarios.id','=','beneficiario_id')
            ->where('indicator_id','=',$id)
            ->select('beneficios.id',DB::raw('beneficiarios.id as beneficiario_id'),'beneficiarios.nombrebeneficiario','beneficiarios.apellidobeneficiario','beneficiarios.genero','beneficiarios.rangoedad','beneficiarios.nombreubicacion')
            ->get();

        $ids = array();
            foreach($beneficiarios as $b){
                array_push($ids, $b->beneficiario_id);
            }
        $all = Beneficiarios::whereNotIn('id',$ids)->get();

        return view('beneficios.index')->with('i',$i)->with('project',$project)
        ->with('beneficiarios',$beneficiarios)->with('all',$all);
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
        //
        $ids = json_decode($ids, true);

        $indicator_id = $ids[0];
        
        $indicator = Indicator::find($indicator_id);
        
        for ($i = 1; $i<=( count($ids) -1 ); $i++){
            $beneficio = new Beneficio;
            $beneficio->indicator_id = $indicator_id;
            $beneficio->beneficiario_id = $ids[$i];
            $beneficio->save();
        
            $indicator->accumulated = $indicator->accumulated + 1;
        
        }

        
        $indicator->percentage = ($indicator->accumulated / $indicator->goal)*100;

        $indicator->update();

        return "LISTO";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Beneficio  $beneficio
     * @return \Illuminate\Http\Response
     */
    public function show(Beneficio $beneficio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beneficio  $beneficio
     * @return \Illuminate\Http\Response
     */
    public function edit(Beneficio $beneficio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beneficio  $beneficio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beneficio $beneficio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beneficio  $beneficio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beneficio $beneficio, $id, $indicador)
    {
        //
        $beneficio = Beneficio::find($id);
        $beneficio->delete();

        
        $i = Indicator::find($indicador);
        $i->accumulated = $i->accumulated - 1;

        $i->percentage = ($i->accumulated / $i->goal)*100;

        $i->update();

        return redirect("/beneficios/$indicador");
    }
}
