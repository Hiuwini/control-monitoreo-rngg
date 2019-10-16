<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CInstitutional;

class CategoryInstitutionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ci = CInstitutional::all();
        return view('c_institutional.index')->with('ci',$ci);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('c_institutional.create');
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
        $ci = new CInstitutional;

        $ci->name = $request->name;
        $ci->status = ( $request->status == 'on' ) ? true:false;
        
        $ci->save();

        $all = CInstitutional::all();
        return view('c_institutional.index')->with('ci',$all);
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
        $ci = CInstitutional::find($id);
        return view('c_institutional.update')->with('ci',$ci);
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
        $ci = CInstitutional::find($request->id);

        $ci->name = $request->name;
        $ci->status = ( $request->status == 'on') ? true:false;
       

        $ci->update();

        return redirect('/ci');
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
        $ci = CInstitutional::find($id);
        $ci->delete();
        return redirect('/ci');
    }
}
