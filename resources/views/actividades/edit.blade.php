@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Editar</h1>
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
                            <div class="card-title mb-3">Editar Actividades</div>

                        <form method="POST" action="/actividades/update/{{$actividades->id}}">

                                @csrf
                                @method('PUT')
                                <div class="row">
                                   <div class="col-md-6 form-group mb-3">
                                    <label>Nombre</label>
                                    <div class="col-md-8">
                                        <input type="text" name="nombre" value="{{ $actividades->nombre }}" class="form-control input-lg" />
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el nombre de la actividad.</small>
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Descripción</label>
                                    <div class="col-md-8">
                                        <input type="text" name="descripcion" value="{{ $actividades->descripcion }}" class="form-control input-lg" />
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese la descripcion de la actividad</small>
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Fecha</label>
                                    <div class="col-md-8">
                                        <input type="date" name="fecha" value="{{ $actividades->fecha }}" class="form-control input-lg" />
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese la fecha de la actividad</small>
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Cantidad proyectada</label>
                                    <div class="col-md-8">
                                        <input type="text" name="cantidadProyectada" value="{{ $actividades->cantidadProyectada }}" class="form-control input-lg" />
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese la cantidad proyectada para la actividad</small>
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Duración de la actividad en horas</label>
                                    <div class="col-md-8">
                                        <input type="text" name="duracion" value="{{ $actividades->duracion }}" class="form-control input-lg" />
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese la duración de la actividad</small>
                                    </div>
                                </div>

                                </div>

                                <div class="form-group text-left">
                                    <input type="submit" name="edit" class="btn btn-success m-1" value="Actualizar" />

                                    <a style="margin: 19px;" href="/events/{{$actividades->indicator_id}}" class="btn btn-danger m-1">Cancelar</a>
                                    
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
