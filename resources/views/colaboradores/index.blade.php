@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Colaboradores</h1>
                <ul>
                    
                    <li><a href="">GESTION</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Listado de Colaboradores
                                <a style="margin: 19px;" href="{{ url('/colaboradores/create')}}" class="btn btn-primary">Nuevo Colaborador</a>
                                <a style="margin: 19px;" href="" class="btn btn-primary">Buscar Colaborador</a>
                            </div>
                            
                                <div class="row">

                                     <table class="table table-light">
                                         <thead class="thead-light">
                                             <tr>
                                                 <th>Id</th>
                                                 <th>Nombre</th>
                                                 <th>Apellido</th>
                                                
                                                 <th>Teléfono</th>
                                                 <th>Email</th>
                                                 
                                                
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach($colaboradores as $colaboradores)
                                             <tr>
                                                 <td>{{$loop->iteration}}</td>
                                                 <td>{{ $colaboradores->nombrecolaborador}}</td>
                                                 <td>{{ $colaboradores->apellidocolaborador}}</td>
                                                 
                                                 <td>{{ $colaboradores->telefonocolaborador}}</td>
                                                 <td>{{ $colaboradores->emailcolaborador}}</td>
                                                
                                                 
                                                 <td>

                                                    <a href="{{ route('colaboradores.edit', $colaboradores->id)}}" class="btn btn-warning">Editar</a>

                                                     <td>
                                                     <form action="{{ route('colaboradores.destroy', $colaboradores->id) }}" method="POST">
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
