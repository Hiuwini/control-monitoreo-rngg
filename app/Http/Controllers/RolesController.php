<?php

namespace App\Http\Controllers;

use App\Roles;
use Illuminate\Http\Request;


class RolesController extends Controller
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
    public function index()
    {

        $roles = Roles::orderBy('id','ASC')->paginate(10);
        //$roles = Roles::latest()->paginate(5);
        return view('roles.index', compact('roles'))->with('i',(request()->input('page', 1) - 1) *10);

        //$roles = Roles::all();
        //return view('roles.index')->with('roles', $roles);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('roles.create');

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
        $this->validate($request, ['descripcion' => 'required']);

        $roles = new Roles();
 
        $roles->descripcion = request('descripcion');
        
        $roles->save();
 
        return redirect('/roles');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      //  $rol= Roles::findOrFail($id_rol );
        //return view('admin/roles.show',compact('rol')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $roles = Roles::findOrFail($id);
         return view('roles.edit',compact('roles'));
     
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
        $request->validate([
       'descripcion' => 'required']);
        
        $form_data = array('descripcion' => $request->descripcion);
        $roles = Roles::findOrFail($id);

        Roles::whereId($id)->update($form_data);
        return redirect('roles')->with('success','Rol actualizado correctamente!');
 

        //$roles->descripcion = request('descripcion');
       
 
        //$roles->save();
 
        //return redirect('/roles');
       // Roles::whereId ($id_rol)->update($roles);
        //return redirect('roles')-with('success', 'Rol registrado correctamente!');
        //$rol = Roles::findOrFail($id_rol);
         //$rol->Descripcion = request('descripcion');
         //$rol->save();
         //return redirect('/roles');

        //return redirect('/roles')->with('success', 'Contact updated!');
          
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
   

        $roles = Roles::findOrFail($id);
        $roles->delete();
       return redirect('roles')->with('success', 'Contact dELETE!');
        //return redirect('/roles')->with('success', 'Contact deleted!');
    }
}
