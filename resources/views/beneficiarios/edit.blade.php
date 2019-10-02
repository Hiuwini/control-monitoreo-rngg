@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Editar</h1>
                <ul>
                    <li>Beneficiarios</li>
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Editar Beneficiario</div>

                            <form method="POST" action="{{ route( 'beneficiarios.update', $beneficiarios->id) }}" enctype="multipart/form-data">

                                
                                @csrf
                                @method('PATCH')
                                
                                   <div class="form-group">
                                    <label>Nombre</label>
                                    <div class="col-md-8">
                                        <input type="text" name="nombrebeneficiario" value="{{ $beneficiarios->nombrebeneficiario }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Apellido</label>
                                    <div class="col-md-8">
                                        <input type="text" name="apellidobeneficiario" value="{{ $beneficiarios->apellidobeneficiario }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Género</label>
                                    <div class="col-md-8">
                                        <input type="text" name="genero" value="{{ $beneficiarios->genero }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label>Etnia</label>
                                    <div class="col-md-8">
                                        <input type="text" name="etnia" value="{{ $beneficiarios->etnia }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Rango de Edad</label>
                                    <div class="col-md-8">
                                        <input type="text" name="rangoedad" value="{{ $beneficiarios->rangoedad }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Ubicación</label>
                                    <div class="col-md-8">
                                        <input type="text" name="ubicacion" value="{{ $beneficiarios->ubicacion }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>DPI / CUI</label>
                                    <div class="col-md-8">
                                        <input type="text" name="dpicui" value="{{ $beneficiarios->dpicui }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                  <div class="form-group">
                                    <label>Teléfono</label>
                                    <div class="col-md-8">
                                        <input type="text" name="telefono" value="{{ $beneficiarios->telefono }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Correo Electrónico</label>
                                    <div class="col-md-8">
                                        <input type="text" name="emailbeneficiario" value="{{ $beneficiarios->emailbeneficiario }}" class="form-control input-lg" />
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <label>Indicador</label>
                                    <div class="col-md-8">
                                        <input type="text" name="indicador" value="{{ $beneficiarios->indicador }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                  <div class="form-group">
                                    <label>Tipo Beneficiario</label>
                                    <div class="col-md-8">
                                        <input type="text" name="tipobeneficiario" value="{{ $beneficiarios->tipobeneficiario }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="form-group text-left">
                                    <input type="submit" name="edit" class="btn btn-primary input-lg" value="Actualizar" />

                                    <a style="margin: 19px;" href="{{ url('beneficiarios')}}" class="btn btn-primary">Regresar</a>
                                    
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
