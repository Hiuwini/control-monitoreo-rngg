@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Productos</h1>
                <ul>
                    
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Listado de Productos
                                <a style="margin: 19px;" href="{{ url('/productos/create')}}" class="btn btn-primary">Nuevo Producto</a>
                            </div>
                            
                                <div class="row">

                                     <table class="table table-light">
                                         <thead class="thead-light">
                                             <tr>
                                                 <th>#</th>
                                                 <th>Componente</th>
                                                 <th>Categoria</th>
                                                 <th>Proyecto</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach($productos as $producto)
                                             <tr>
                                                 <td>{{$loop->iteration}}</td>
                                                 <td>{{ $producto->componente}}</td>
                                                 <td>
                                                     <a href="{{ route('producto.edit', $producto->id)}}" class="btn btn-warning">Editar</a>

                                                     <td>
                                                     <form action="{{ route('producto.destroy', $producto->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </td>
                                                    </form>
                                                 </td>
                                                 
                                             </tr>

                                             @endforeach
                                            
                                         </tbody>
                                        
                                     </table>  
                                     {!! $productos->links() !!}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                

                
                
                
                
            </div>


@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>



@endsection

@section('bottom-js')
<script src="{{asset('assets/js/form.basic.script.js')}}"></script>


@endsection
