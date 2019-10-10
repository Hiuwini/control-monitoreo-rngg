@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')

<!-- begin::basic action bar -->
<section class="basic-action-bar">
                <div class="">
                    <!-- begin::main-row -->
                    <div class="row">
                        <!-- start default action bar -->
                        <div class="col-lg-6 mb-3">
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <h3 class="card-title"> Ingreso Nueva Meta</h3>
                                </div>
                                <!--begin::form-->
                                <form action="/metas" method="POST">
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

                                
                                    <div class="card-body">
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Nombre:</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba el nombre de la meta" />
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                                Por favor ingrese el nombre de la meta.
                                            </small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Fecha: </label>
                                                 <input type="date" class="form-control" id="fecha_limite" name="fecha_limite" placeholder="Escriba la fecha limite" />
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                Ingrese la fecha en que debe cumplirse la meta.
                                            </small>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Producto: </label>
                                                
                                                <select name="id_producto" id="id_producto" class="form-control" >
                                                    <option value="">-- Escoja el producto --</option>
                                                    @foreach ($productos as $p)
                                                    <option value="{{ $p['id'] }}" >{{ $p['componente']}}</option>
                                                    @endforeach                                                                    
                                                </select>
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                Seleccione el producto al que se asignara la meta.
                                            </small>
                                            </div>

                                        </div>
                                        <div class="custom-separator"></div>
                                        <div class="card-title">Estado de la meta:</div>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" checked="" name="estado" />
                                        <span>Habilitar</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-success m-1">Agregar</button>
                                                    <a href="{{ url('metas')}}"> <button type="button" class="btn btn-danger m-1">Cancelar</button> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- end::form -->
                            </div>
                        </div>
                        <!-- end default action bar -->
                        @endsection
                        

@section('page-js')
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>



@endsection

@section('bottom-js')
<script src="{{asset('assets/js/form.basic.script.js')}}"></script>


@endsection
