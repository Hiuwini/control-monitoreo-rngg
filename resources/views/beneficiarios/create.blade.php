@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Nuevo</h1>
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
                            <div class="card-title mb-3">Crear Nuevo Beneficiario</div>
                            <form method="POST" action="/beneficiarios" >
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
                                <input type="text" name="nombrebeneficiario" class="form-control input-lg" value="{{ old('nombrebeneficiario') }}" />
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el nombre del beneficiario.</small>
                            </div>

                             <div class="col-md-8">
                                <label>Apellido</label>
                                <input type="text" name="apellidobeneficiario" class="form-control input-lg" value="{{ old('apellidobeneficiario') }}"/>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el apellido del beneficiario.</small>
                            </div>
                          
                            <div class="col-md-8">
                                <label>Género</label>
                                <select name="genero" id="generoId" class="form-control" >
                                    <option value="">-- Seleccione el género --</option>
                                    <option value="Femenino">Femenino</option>    
                                    <option value="Masculino">Masculino</option>                                
                                </select>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Seleccione el género del beneficiario.</small>
                            </div>

                            <div class="col-md-8">
                                <label>Etnia</label>
                                <select name="etnia" id="etniaId" class="form-control" >
                                    <option value="">-- Seleccione la etnia --</option>
                                    <option value="Ladina">Ladina</option>  
                                    <option value="Xinca">Xinca</option>  
                                    <option value="Garífuna">Garífuna</option>
                                    <option value="K’iche’">K’iche’</option>
                                    <option value="Kaqchikel">Kaqchikel</option>   
                                    <option value="Mam">Mam</option>                             
                                    <option value="Q'eqchi'">Q'eqchi'</option>
                                    <option value="Poqomam">Poqomam</option>
                                    <option value="Tz'utujil">Tz'utujil</option>
                                    <option value="Popti'">Popti'</option>
                                    <option value="Akateko">Akateko</option>
                                    <option value="Achi">Achi</option>
                                    <option value="Otro">Otro</option>
                                </select>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Seleccione la etnia del beneficiario.</small>
                            </div>

                            <div class="col-md-8">
                                <label>Rango de Edad</label>
                                <select name="rangoedad" id="rangoedadId" class="form-control" >
                                    <option value="">-- Seleccione el rango de edad--</option>
                                    <option value="Menor de 18">Menor de 18</option>    
                                    <option value="18 - 30">18 - 30</option>  
                                    <option value="31 - 49">31 - 49</option>
                                    <option value="50 - 60">50 - 60</option>                              
                                    <option value="Mayor de 60">Mayor de 60</option>
                                </select>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Seleccinoe el rango de edad del beneficiario.</small>
                            </div>

                            <div class="col-md-8">
                                <label>Ubicación</label>
                                <select name="nombreubicacion" id="nombreubicacionId" class="form-control" >
                                    <option value="">-- Seleccione la ubicación --</option>
                                    <option value="Urbana">Urbana</option>    
                                    <option value="Rural">Rural</option>                                
                                </select>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Seleccione la ubicación del beneficiario.</small>
                            </div>

                            <div class="col-md-8">
                                <label>DPI / CUI</label>
                                <input type="text" name="dpicui" class="form-control input-lg" value="{{ old('dpicui') }}"/>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el DPI / CUI del beneficiario.</small>
                            </div>

                            <div class="col-md-8">
                                <label>Teléfono</label>
                                <input type="text" name="telefono" class="form-control input-lg" value="{{ old('telefono') }}"/>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el telefono del beneficiario.</small>
                            </div>

                            <div class="col-md-8">
                                <label>Correo electrónico</label>
                                <input type="text" name="emailbeneficiario" class="form-control input-lg" value="{{ old('emailbeneficiario') }}"/>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                 Ingrese el correo electrónico del beneficiario.</small>
                            </div>

                            <div class="col-md-8">
                                <label>Indicador</label>
                                <input type="text" name="indicador" class="form-control input-lg" value="{{ old('indicador') }}"/>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Ingrese el indicador del beneficiario.</small>
                            </div>

                            <div class="col-md-8">
                                <label>Tipo de Beneficiario</label>
                                <select name="tipobeneficiario" id="tipobeneficiarioId" class="form-control" >
                                    <option value="">-- Seleccione el tipo de beneficiario --</option>
                                    <option value="Emprendedor">Emprendedor</option>
                                    <option value="Publico">Publico</option>
                                    <option value="Privado">Privado</option>                               
                                </select>
                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                Seleccione el tipo del beneficiario.</small>
                            </div>

                             <div class="form-group text-left">

                                <button type="submit" class="btn btn-primary">Crear</button>
 
                                        <a style="margin: 19px;" href="{{ url('beneficiarios')}}" class="btn btn-primary">Regresar</a>
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
