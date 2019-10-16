@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Actividades</h1>
                <ul>
                    
                    <li><a href="">GESTION</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Listado Actividades
                                <a style="margin: 19px;" href="{{ url('/actividades/create')}}" class="btn btn-primary">Nuevo Actividad</a>
                                <a style="margin: 19px;" href="" class="btn btn-primary">Buscar Actividades</a>
                            </div>
                            
                                <div class="row">

                                     <table class="table table-light">
                                         <thead class="thead-light">
                                             <tr>
                                                 <th>Id</th>
                                                 <th>Nombre</th>
                                                 <th>Descripción</th>
                                                 <th>Fecha</th>
                                                 <th>Cantidad proyectada</th>
                                                 <th>Duración en horas</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach($actividades as $actividad)
                                             <tr>
                                                 <td>{{$loop->iteration}}</td>
                                                 <td>{{ $actividad->nombre}}</td>
                                                 <td>{{ $actividad->descripcion}}</td>
                                                 <td>{{ $actividad->fecha}}</td>
                                                 <td>{{ $actividad->cantidadProyectada}}</td>
                                                 <td>{{ $actividad->duracion}}</td>
                                                 <td>

                                                    <a href="{{ route('actividades.edit', $actividad->id)}}" class="btn btn-warning">Editar</a>

                                                     <td>
                                                     <form action="{{ route('actividades.destroy', $actividad->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </td>
                                                     
                                                    </td>
                                                    </form>
                                                 </td>
                                                 
                                             </tr>

                                             @endforeach
                                            
                                         </tbody>
                                        
                                     </table>  
                                     
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
