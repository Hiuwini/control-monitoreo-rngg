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
                                    <h3 class="card-title"> Ingreso Nuevo Producto</h3>
                                </div>
                                <!--begin::form-->
                                <form action="/producto" method="POST">
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
                                                <label for="inputEmail4" class="ul-form__label">Componente:</label>
                                                <input type="text" class="form-control" id="componente" name="componente" placeholder="Escriba el nombre del componente" />
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">                                                
                                                Por favor ingrese el nombre del componente.
                                            </small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Categoria: </label>
                                                <input type="text" class="form-control" id="id_categoria" name="id_categoria" placeholder="Escriba la Categoria" />
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                Ingrese la categoria a la que pertenecera el producto.
                                            </small>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="ul-form__label">Proyecto: </label>
                                                <input type="text" class="form-control" id="id_proyecto" name="id_proyecto" placeholder="Seleccione un proyecto" />
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                Seleccione el proyecto al que va a pertenecer el producto
                                            </small>
                                            </div>
 
                                        </div>
                                        <div class="custom-separator"></div>
                                        <div class="card-title">Estado del producto:</div>
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" checked="" name="status" />
                                        <span>Habilitar</span>
                                        <span class="checkmark"></span>
                                    </label>
                                        
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="mc-footer">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-success m-1">Agregar</button>
                                                    <a href="{{ url('producto')}}"> <button type="button" class="btn btn-danger m-1">Cancelar</button> </a>
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
