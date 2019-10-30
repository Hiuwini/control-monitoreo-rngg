<?php

namespace App\Http\Controllers;

use App\Indicator;
use Illuminate\Http\Request;

class IndicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        return view('indicators.create')->with('id_project',$id);
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
        $indicator = new Indicator;
        $indicator->name = $request->name;
        $indicator->status = $request->status;
        $indicator->type = $request->type;
        if( $request->type == 3 )
            $indicator->metric = $request->metric;
        else
            $indicator->metric = 0;

        $indicator->accumulated = $request->accumulated;
        $indicator->goal = $request->goal;
        $indicator->percentage = ($request->accumulated / $request->goal) * 100;
        $indicator->id_proyecto = $request->id_project;

        $indicator->date_alert = $request->date_alert;
        $indicator->date_limit = $request->date_limit;

        $indicator->save();
        
        return redirect("project/$request->id_project");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function show(Indicator $indicator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function edit(Indicator $indicator, $id)
    {
        //
        $i = Indicator::find($id);

        return view('indicators.update')->with('i',$i);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicator $indicator)
    {
        //
        $indicator = Indicator::find($request->id);
        $indicator->name = $request->name;
        $indicator->status = $request->status;

        $indicator->date_alert = $request->date_alert;
        $indicator->date_limit = $request->date_limit;
        
        $indicator->update();
        return redirect("/project/$indicator->id_proyecto");
    }

    public function custom($id){
        $i = Indicator::find($id);

        return view('indicators.custom')->with('i',$i);
    }

    public function refresh(Request $request, Indicator $indicator)
    {
        //
        $indicator = Indicator::find($request->id);
        $indicator->name = $request->name;
        $indicator->status = $request->status;

        $indicator->metric = $request->metric;

        $indicator->accumulated = $request->accumulated;
        $indicator->goal = $request->goal;
        $indicator->percentage = ($request->accumulated / $request->goal) * 100;

        $indicator->update();

        return redirect("/project/$indicator->id_proyecto");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indicator $indicator, $id)
    {
        //
        $indicator = Indicator::find($id);
        $project_id = $indicator->id_proyecto;
        $indicator->delete();
        return redirect("/project/$project_id");
    }
}
