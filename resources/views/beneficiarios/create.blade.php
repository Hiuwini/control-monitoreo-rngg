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
                            </div>

                             <div class="col-md-8">
                                <label>Apellido</label>
                                <input type="text" name="apellidobeneficiario" class="form-control input-lg" value="{{ old('apellidobeneficiario') }}"/>
                            </div>
                          
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
                                <label>Etnia</label>
                                <input type="text" name="etnia" class="form-control input-lg" value="{{ old('etnia') }}"/>
                            </div>

                            <div class="col-md-8">
                                <label>Rango de Edad</label>
                                <input type="text" name="rangoedad" class="form-control input-lg" value="{{ old('rangoedad') }}"/>
                            </div>

                            <div class="col-md-8">
                                <label>Ubicación</label>
                                <select name="ubicacion" id="ubicacionId" class="form-control" >
                                    <option value="">-- Escoja la ubicacion --</option>
                                    @foreach ($generos as $ubicaciones)
                                    <option value="{{ $ubicaciones['ubicacion'] }}" >{{ $ubicaciones['ubicacion']}}</option>
                                    @endforeach                                    
                                </select>
                            </div>

                            <div class="col-md-8">
                                <label>DPI / CUI</label>
                                <input type="text" name="dpicui" class="form-control input-lg" value="{{ old('dpicui') }}"/>
                            </div>

                            <div class="col-md-8">
                                <label>Teléfono</label>
                                <input type="text" name="telefono" class="form-control input-lg" value="{{ old('telefono') }}"/>
                            </div>

                            <div class="col-md-8">
                                <label>Correo electrónico</label>
                                <input type="text" name="emailbeneficiario" class="form-control input-lg" value="{{ old('emailbeneficiario') }}"/>
                            </div>

                            <div class="col-md-8">
                                <label>Indicador</label>
                                <input type="text" name="indicador" class="form-control input-lg" value="{{ old('indicador') }}"/>
                            </div>

                            <div class="col-md-8">
                                <label>Tipo de Beneficiario</label>
                                <select name="tipobeneficiario" id="tipobeneficiarioId" class="form-control" >
                                    <option value="">-- Escoja el tipo de beneficiario --</option>
                                    @foreach ($tipobeneficiarios as $tipobeneficiario)
                                    <option value="{{ $tipobeneficiario['tipobeneficiario'] }}" >{{ $tipobeneficiario['tipobeneficiario']}}</option>
                                    @endforeach                                    
                                </select>
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
