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
                                <label>Teléfono</label>
                                <input type="text" name="telefono" class="form-control input-lg" value="{{ old('telefono') }}"/>
                            </div>

                            <br>

                            <div class="col-md-8">
                                <label>Género</label>
                                <input type="text" name="genero" class="form-control input-lg" value="{{ old('genero') }}"/>
                            </div>

                               <div class="col-md-8">
                                <label>Tipo Beneficiario</label>
                                <input type="text" name="tipobeneficiario" class="form-control input-lg" value="{{ old('tipobeneficiario') }}"/>
                            </div>

                           {{-- <div class="col-md-8">
                                <label>Género</label>
                                <select name="id" id="inputId" class="form-control" >
                                    <option value="">-- Escoja el género --</option>
                                    @foreach ($generos as $genero)
                                    <option value="{{ $genero['id'] }}" >{{ $genero['genero']}}</option>
                                    @endforeach                                    
                                </select>
                            </div>--}}

                            {{--<div class="col-md-8">
                                <label>Tipo Beneficiario</label>
                                <select name="id" id="inputId" class="form-control" >
                                    <option value="">-- Escoja el tipo de beneficiario --</option>
                                    @foreach ($tipobeneficiarios as $tipobeneficiario)
                                    <option value="{{ $tipobeneficiario['id'] }}" >{{ $tipobeneficiario['nombrebeneficiario']}}</option>
                                    @endforeach                                    
                                </select>
                            </div>--}}


                             <div class="form-group text-left">

                                <button type="submit" class="btn btn-primary">Crear</button>
 
                                        

                                        <a style="margin: 19px;" href="{{ url('beneficiarios')}}" class="btn btn-primary">Regresar</a>
                                    </div> 
                                    </form>   
 

                            <div class="card-title">Switch</div>

                            <label class="switch switch-primary mr-3">
                                <span>Primary</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-secondary mr-3">
                                <span>Secondary</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-success mr-3">
                                <span>Success</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-warning mr-3">
                                <span>Warning</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-danger mr-3">
                                <span>Danger</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-light mr-3">
                                <span>Light</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-dark mr-3">
                                <span>Dark</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Checkbox Default</div>
                            <label class="checkbox checkbox-primary">
                                <input type="checkbox" checked>
                                <span>Primary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-secondary">
                                <input type="checkbox" checked>
                                <span>Secondary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-success">
                                <input type="checkbox" checked>
                                <span>Success</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-warning">
                                <input type="checkbox" checked>
                                <span>Warning</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-danger">
                                <input type="checkbox" checked>
                                <span>Danger</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-info">
                                <input type="checkbox" checked>
                                <span>Info</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-dark">
                                <input type="checkbox" checked>
                                <span>Dark</span>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Checkbox Outline</div>
                            <label class="checkbox checkbox-outline-primary">
                                <input type="checkbox" checked>
                                <span>Primary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-secondary">
                                <input type="checkbox" checked>
                                <span>Secondary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-success">
                                <input type="checkbox" checked>
                                <span>Success</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-warning">
                                <input type="checkbox" checked>
                                <span>Warning</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-danger">
                                <input type="checkbox" checked>
                                <span>Danger</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-info">
                                <input type="checkbox" checked>
                                <span>Info</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-dark">
                                <input type="checkbox" checked>
                                <span>Dark</span>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body" [formGroup]="radioGroup">
                            <div class="card-title">Radio Button</div>
                            <label class="radio radio-primary">
                                <input type="radio" name="radio" [value]="1" formControlName="radio">
                                <span>Primary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-secondary">
                                <input type="radio" name="radio" [value]="2" formControlName="radio">
                                <span>Secondary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-success">
                                <input type="radio" name="radio" [value]="3" formControlName="radio">
                                <span>Success</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-warning">
                                <input type="radio" name="radio" [value]="4" formControlName="radio">
                                <span>Warning</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-danger">
                                <input type="radio" name="radio" [value]="5" formControlName="radio">
                                <span>Danger</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-light">
                                <input type="radio" name="radio" [value]="6" formControlName="radio">
                                <span>Light</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-dark">
                                <input type="radio" name="radio" [value]="7" formControlName="radio">
                                <span>Dark</span>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body" [formGroup]="radioGroup">
                            <div class="card-title">Radio Button Outline</div>
                            <label class="radio radio-outline-primary">
                                <input type="radio" name="radio" [value]="1" formControlName="radio">
                                <span>Primary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-secondary">
                                <input type="radio" name="radio" [value]="2" formControlName="radio">
                                <span>Secondary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-success">
                                <input type="radio" name="radio" [value]="3" formControlName="radio">
                                <span>Success</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-warning">
                                <input type="radio" name="radio" [value]="4" formControlName="radio">
                                <span>Warning</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-danger">
                                <input type="radio" name="radio" [value]="5" formControlName="radio">
                                <span>Danger</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-light">
                                <input type="radio" name="radio" [value]="6" formControlName="radio">
                                <span>Light</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-dark">
                                <input type="radio" name="radio" [value]="7" formControlName="radio">
                                <span>Dark</span>
                                <span class="checkmark"></span>
                            </label>
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
