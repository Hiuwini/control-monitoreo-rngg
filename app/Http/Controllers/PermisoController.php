<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

use App\User;
use App\Roles;
use App\Permiso;
class PermisoController extends Controller
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
        //
        $users = User::all();
        return view('permisos.index')->with('users',$users);
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
    public function store(Request $request)
    {
        //
        $permiso = new Permiso;
        $permiso->user_id = $request->userid;
        $permiso->rol_id = $request->rol;
        $permiso->save();
        return redirect('/permisos');

        
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
        //Obteniendo la data de usuario
        $user = User::find($id);       
        $roles= Roles::all();
        $permisoactual=Permiso::where('user_id',$id)->get();
        if($permisoactual=='[]'){
            return view('permisos.edit')->with('user',$user)->with('roles',$roles);
        }
        else{ 
        $nombrerol=Roles::find($permisoactual[0]->rol_id);
        return view('permisos.edit')->with('user',$user)->with('roles',$roles)->with('permisoactual',$nombrerol);
        }

        //Obteniendo el rol que tiene ese usuario. 
        //$rolactual = DB::table('permisos')->select('rol_id')->where('user_id', '=', $id)->get();


        //$datorol=Roles::find( $rolactual->rol_id);
        
        //Mostrando la vista y enviando todos los datos del suuario y el id del rol actual.

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $permiso=Permiso::where('user_id',$id)->update(['rol_id' => $request->rol]);        
        return redirect('/permisos');
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
    }
}
