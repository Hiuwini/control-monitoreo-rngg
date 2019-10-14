@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Editar</h1>
                <ul>
                    <li>Colaboradores</li>
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Editar Colaborador</div>

                            <form method="POST" action="{{ route( 'colaboradores.update', $colaboradores->id) }}" enctype="multipart/form-data">

                                
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                   <div class="col-md-6 form-group mb-3">
                                    <label>Nombre</label>
                                    <div class="col-md-8">
                                        <input type="text" name="nombrecolaborador" value="{{ $colaboradores->nombrecolaborador }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                 <div class="col-md-6 form-group mb-3">
                                    <label>Apellido</label>
                                    <div class="col-md-8">
                                        <input type="text" name="apellidocolaborador" value="{{ $colaboradores->apellidocolaborador }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Dirección</label>
                                    <div class="col-md-8">
                                        <input type="text" name="direccioncolaborador" value="{{ $colaboradores->direccioncolaborador }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                  <div class="col-md-6 form-group mb-3">
                                    <label>Teléfono</label>
                                    <div class="col-md-8">
                                        <input type="text" name="telefonocolaborador" value="{{ $colaboradores->telefonocolaborador }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Email</label>
                                    <div class="col-md-8">
                                        <input type="text" name="emailcolaborador" value="{{ $colaboradores->emailcolaborador }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                  <div class="col-md-6 form-group mb-3">
                                    <label>Género</label>
                                    <div class="col-md-8">
                                        <input type="text" name="genero" value="{{ $colaboradores->genero }}" class="form-control input-lg" />
                                       
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Fecha de Nacimiento</label>
                                    <div class="col-md-8">
                                        <input type="date" name="fechanacimiento" value="{{ $colaboradores->fechanacimiento }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Nivel Académico</label>
                                    <div class="col-md-8">
                                        <input type="text" name="nivelacademico" value="{{ $colaboradores->nivelacademico }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Titulo</label>
                                    <div class="col-md-8">
                                        <input type="text" name="titulo" value="{{ $colaboradores->titulo }}" class="form-control input-lg" />
                                    </div>
                                </div>
                                
                                </div>

                                <div class="form-group text-left">
                                    <input type="submit" name="edit" class="btn btn-success m-1" value="Actualizar" />

                                    <a style="margin: 19px;" href="{{ url('colaboradores')}}" class="btn btn-danger m-1">Cancelar</a>
                                    
                                </div>

                                  <div class="field">
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
