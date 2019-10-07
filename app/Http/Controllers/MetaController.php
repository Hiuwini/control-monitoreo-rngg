<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Meta;
use Carbon\Carbon;
use App\Producto;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $metas = Meta::orderBy('id','ASC')->paginate(10);
        //$roles = Roles::latest()->paginate(5);
        return view('metas.index', compact('metas'))->with('i',(request()->input('page', 1) - 1) *10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productos = Producto::all();
        return view('metas.create', compact('productos'));
        
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
        $this->validate($request,[ 'nombre'=>'required', 'fecha_limite'=>'required', 'estado'=>'required', 'id_producto'=>'required']);
        //Meta::create($request->all());

       
        $meta = new Meta(); 
        $meta->nombre = request('nombre');        
        $meta->fecha_limite= Carbon::createFromFormat('Y-m-d', $request->fecha_limite)->toDateString();
        $meta->id_producto= request('id_producto');
        $meta->estado = ( $request->estado == 'on') ? true:false;
        $meta->save();      

        return redirect()->route('metas.index')->with('success','Meta agregada satisfactoriamente');
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
        $metas = Meta::findOrFail($id);

        $productos = Producto::all();       
         return view('metas.edit',compact('metas','productos'));
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
        $this->validate($request,[ 'nombre'=>'required', 'fecha_limite'=>'required', 'estado'=>'required', 'id_producto'=>'required']);
             
             $form_data = array('nombre' => $request->nombre,
                                'fecha_limite'=> Carbon::createFromFormat('Y-m-d', $request->fecha_limite)->toDateString(),
                                'id_producto' => $request->id_producto,
                                'estado' => (( $request->estado == 'on') ? true:false )
                            );
                            Meta::whereId($id)->update($form_data);

             return redirect('metas')->with('success','Meta Actualizada correctamente!');
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
        $metas = Meta::find($id);
        $metas->delete();
        return redirect('/metas');
    }
}
