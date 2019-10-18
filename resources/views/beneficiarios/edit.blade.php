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
                                <div class="row">
                                   <div class="col-md-6 form-group mb-3">
                                    <label>Nombre</label>
                                    <div class="col-md-8">
                                        <input type="text" name="nombrebeneficiario" value="{{ $beneficiarios->nombrebeneficiario }}" class="form-control input-lg" />
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el nombre del beneficiario.</small>
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Apellido</label>
                                    <div class="col-md-8">
                                        <input type="text" name="apellidobeneficiario" value="{{ $beneficiarios->apellidobeneficiario }}" class="form-control input-lg" />
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el apellido del beneficiario.</small>
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Género</label>
                                    <div class="col-md-8">
                                        <input type="text" name="genero" value="{{ $beneficiarios->genero }}" class="form-control input-lg" />
                                    <select name="genero" id="generoId" value="{{$beneficiarios->genero}}" class="form-control" >
                                    <option value="">-- Seleccione el género --</option>
                                    <option value="Femenino">Femenino</option>    
                                    <option value="Masculino">Masculino</option>                                
                                </select>
                                    </div>
                                </div>

                                
                                        
                                   

                                <div class="col-md-6 form-group mb-3">
                                    <label>Rango de Edad</label>
                                    <div class="col-md-8">
                                        <input type="text" name="rangoedad" value="{{ $beneficiarios->rangoedad }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Ubicación</label>
                                    <div class="col-md-8">
                                        <input type="text" name="nombreubicacion" value="{{ $beneficiarios->nombreubicacion }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>DPI / CUI</label>
                                    <div class="col-md-8">
                                        <input type="text" name="dpicui" value="{{ $beneficiarios->dpicui }}" class="form-control input-lg" />
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el DPI/CUI del beneficiario.</small>
                                    </div>
                                </div>

                                  <div class="col-md-6 form-group mb-3">
                                    <label>Teléfono</label>
                                    <div class="col-md-8">
                                        <input type="bigint" name="telefono" value="{{ $beneficiarios->telefono }}" class="form-control input-lg" />}
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el telefono del beneficiario.</small>
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label>Correo Electrónico</label>
                                    <div class="col-md-8">
                                        <input type="text" name="emailbeneficiario" value="{{ $beneficiarios->emailbeneficiario }}" class="form-control input-lg" />
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el correo electrónico del beneficiario.</small>
                                    </div>
                                </div>  

                                <div class="col-md-6 form-group mb-3">
                                    <label>Indicador</label>
                                    <div class="col-md-8">
                                        <input type="text" name="indicador" value="{{ $beneficiarios->indicador }}" class="form-control input-lg" />
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el indicador del beneficiario.</small>
                                    </div>
                                </div>

                                  <div class="col-md-6 form-group mb-3">
                                    <label>Tipo Beneficiario</label>
                                    <div class="col-md-8">
                                        <input type="text" name="tipobeneficiario" value="{{ $beneficiarios->tipobeneficiario }}" class="form-control input-lg" />
                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el tipo del beneficiario.</small>
                                    </div>
                                </div>

                                </div><div class="custom-separator"></div>
                                        <div class="card-title">Miembro grupo gestores</div>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" {{ ( $beneficiarios->estado == true) ? 'checked':' ' }} name="estado" id="estado" />
                                        <span>Habilitar</span>
                                        <span class="checkmark"></span>
                                    </label>

                                <div class="form-group text-left">
                                    <input type="submit" name="edit" class="btn btn-success m-1" value="Actualizar" />

                                    <a style="margin: 19px;" href="{{ url('beneficiarios')}}" class="btn btn-danger m-1">Cancelar</a>
                                    
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
