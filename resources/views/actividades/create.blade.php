@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Nuevo</h1>
                <ul>
                    <li>Actividades</li>
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
             

                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Crear Nueva Actividad</div>
                            <form method="POST" action="/actividades" >
                                {{ csrf_field() }}

                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach                                     
                                    </ul>                                  
                                </div> 
                                @endif

                        <div class="row">

                            <div class="col-md-6 form-group mb-3">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control input-lg" value="{{ old('nombre') }}" />
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el nombre de la actividad.</small>
                            </div>

                             <div class="col-md-6 form-group mb-3">
                             <label>Descripción</label>
                                <input type="text" name="descripcion" class="form-control input-lg" value="{{ old('descripcion') }}"/>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese la descripción de la actividad</small>
                            </div>

                            <div class="col-md-6 form-group mb-3">
                             <label>Fecha</label>
                                <input type="date" name="fecha" class="form-control input-lg" value="{{ old('fecha') }}"/>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese la fecha de la actividad</small>
                            </div>

                            <div class="col-md-6 form-group mb-3">
                             <label>Cantidad de proyectada</label>
                                <input type="text" name="cantidadProyectada" class="form-control input-lg" value="{{ old('cantidadProyectada') }}"/>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese la cantidad proyectada de la actividad</small>
                            </div>

                            <div class="col-md-6 form-group mb-3">
                             <label>Duración en horas</label>
                                <input type="text" name="duracion" class="form-control input-lg" value="{{ old('duracion') }}"/>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese la duracion de la actividad en horas</small>
                            </div>
                            <input type="hidden" name="id_proyecto" value="{{$project->id}}">
                            <input type="hidden" name="indicator_id" value="{{$indicator->id}}">
                            
                            </div>     

                             <div class="form-group text-left">

                                <button type="submit" class="btn btn-success m-1">Crear</button>
 
                                        <a style="margin: 19px;" href="/events/{{$indicator->id}}" class="btn btn-danger m-1">Cancelar</a>
                                    </div> 
                                    </form>   
             </div>


@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>



@endsection

@section('bottom-js')
<script src="{{asset('assets/js/form.basic.script.js')}}"></script>


@endsection
