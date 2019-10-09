@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Roles</h1>
                <ul>
                    
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Listado Rol
                                <a style="margin: 19px;" href="{{ url('/roles/create')}}" class="btn btn-primary">Nuevo Rol</a>
                            </div>
                            
                                <div class="row">

                                     <table class="table table-light">
                                         <thead class="thead-light">
                                             <tr>
                                                 <th>#</th>
                                                 <th>Descripcion</th>
                                                 <th>Editar</th>
                                                 <th>Eliminar</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach($roles as $rol)
                                             <tr>
                                                 <td>{{$loop->iteration}}</td>
                                                 <td>{{ $rol->descripcion}}</td>
                                                 <td>
                                                     <a href="{{ route('roles.edit', $rol->id)}}" class="btn btn-warning">Editar</a>

                                                     <td>
                                                     <form action="{{ route('roles.destroy', $rol->id) }}" method="POST">
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
                                     {!! $roles->links() !!}
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
