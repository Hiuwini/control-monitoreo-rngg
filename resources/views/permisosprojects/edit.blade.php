@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')

<div class="breadcrumb">
                <h1>PERMISOS PROYECTOS</h1>
                </div>

            <div class="separator-breadcrumb border-top"></div>
            <div class="col-lg-6 mb-3">
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <h3 class="card-title"> Modificando a: {{$user->username}}</h3>
                                </div>
                                <!--begin::form-->                                
                                @if (!isset($proyectosactuales))
                                <form action="{{ url('/permisosprojects/store') }}" method="POST">
                                {{ csrf_field() }}
                                @else
                                <form action="{{ url("/permisosprojects/$user->id") }}" method="POST">                                
                                {{ method_field('PUT') }}                            
                                {{ csrf_field() }}
                        
                                @endif

                                    <div class="card-body">
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Nombres: {{$user->firstname}} </label>
                                                
                                            </div>
                                            <div class="form-group col-md-12">
                                                
                                            <label for="inputEmail4" class="ul-form__label">Apellidos: {{$user->lastname}} </label>
                                            </div>

                                            
                                            <div class="form-group col-md-12">
                                                
                                            <label for="inputEmail4" class="ul-form__label">Permiso Actual: 
                                                @if (!isset($proyectosactuales))
                                                     Ninguno
                                                @else
                                                
                                                
                                                @endif
                                                </label>
                                            </div>

                                        </div>
                                        <div class="custom-separator"></div>
                                        <div class="card-title">Seleccione Proyecto a Asignar:</div>
                                        
                                       @if(!isset($proyectosactuales))
                                       @foreach ($projects as $project)                                        
                                       <label class="checkbox checkbox-primary">
                                            <input type="checkbox" value="{{$project->id}}" id="project{{$project->id}}" name="project{{$project->id}}">
                                            <span>{{$project->name}}</span>
                                            <span class="checkmark"></span>
                                        </label>


                                        @endforeach
                                        @else
                                        @foreach($projects as $project)
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox" 
                                            value="{{$project->id}}" 
                                            id="project{{$project->id}}"
                                            name="project{{$project->id}}"
                                            @foreach($proyectosactuales as $proyectoactual)
                                                @if($proyectoactual->project_id == $project->id)
                                                checked
                                                @endif
                                            @endforeach
                                            
                                            >
                                            <span>{{$project->name}}</span>
                                            <span class="checkmark"></span>
                                        </label>
                                        @endforeach
 
                                        @endif

                                        </select>
                                    
                                        <input type="hidden" id="userid" name="userid" value="{{$user->id}}">                                        
                                    </div>
                                    <div class="card-footer">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <button type="submit" class="btn  btn-success m-1">Modificar</button>
                                                    <a href="/permisos"> <button  type="button" class="btn btn-outline-danger m-1">Cancelar</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- end::form -->
                            </div>
                        </div>
                        <!-- end Solid Bar -->


@endsection
@section('page-js')


@endsection

@section('bottom-js')




@endsection
