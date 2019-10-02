@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Nuevo</h1>
                <ul>
                    <li>Colaborador</li>
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
             

                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Crear Nuevo Colaborador</div>
                            <form method="POST" action="/colaboradores" >
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

                            <div class="col-md-8">
                                <label>Nombre</label>
                                <input type="text" name="nombrecolaborador" class="form-control input-lg" value="{{ old('nombrecolaborador') }}" />
                            </div>

                             <div class="col-md-8">
                                <label>Apellido</label>
                                <input type="text" name="apellidocolaborador" class="form-control input-lg" value="{{ old('apellidocolaborador') }}"/>
                            </div>

                            <div class="col-md-8">
                                <label>Dirección</label>
                                <input type="text" name="direccioncolaborador" class="form-control input-lg" value="{{ old('direccioncolaborador') }}"/>
                            </div>
                            
                            <div class="col-md-8">
                                <label>Teléfono</label>
                                <input type="text" name="telefonocolaborador" class="form-control input-lg" value="{{ old('telefonocolaborador') }}"/>
                            </div>

                            <br>
                            <div class="col-md-8">
                                <label>Email</label>
                                <input type="text" name="emailcolaborador" class="form-control input-lg" value="{{ old('emailcolaborador') }}"/>
                            </div>
                           {{-- <div class="col-md-8">
                                <label>Género</label>
                                <input type="text" name="genero" class="form-control input-lg" value="{{ old('genero') }}"/>
                            </div>--}}


                            <div class="col-md-8">
                                <label>Género</label>
                                <select name="genero" id="generoId" class="form-control" >
                                    <option value="">-- Escoja el género --</option>
                                    @foreach ($generos as $genero)
                                    <option value="{{ $genero['genero'] }}" >{{ $genero['genero']}}</option>
                                    @endforeach                                    
                                </select>
                            </div>

                            <div class="col-md-8">
                                <label>Fecha de Nacimiento</label>
                                <input type="text" name="fechanacimiento" class="form-control input-lg" value="{{ old('fechanacimiento') }}"/>
                            </div>

                            <div class="col-md-8">
                                <label>Nivel acdémico</label>
                                <input type="text" name="nivelacademico" class="form-control input-lg" value="{{ old('nivelacademico') }}"/>
                            </div>

                            <div class="col-md-8">
                                <label>Titulo Obtenido</label>
                                <input type="text" name="titulo" class="form-control input-lg" value="{{ old('titulo') }}"/>
                            </div>

                             <div class="form-group text-left">

                                <button type="submit" class="btn btn-primary">Crear</button>
 
                                        

                                        <a style="margin: 19px;" href="{{ url('colaboradores')}}" class="btn btn-primary">Regresar</a>
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
