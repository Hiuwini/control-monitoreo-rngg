@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">

 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Nueva</h1>
                <ul>
                    <li>Categoría</li>
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Nueva Categoría</div>
                        <form class="needs-validation" novalidate method="POST" action="{{ url('/ci/store') }}">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName">Nombre</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                            name="name" id="name" placeholder="Nombre de categoría" required>
                                    </div>
                                    
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="status">Estatus</label><br>
                                        <label class="switch switch-primary mr-3">
                                                <span>Activo / Inactivo</span>
                                                <input type="checkbox" name="status" id="status" checked>
                                                <span class="slider"></span>
                                        </label>
                                    </div>
                                    
                                    <div class="col-md-12">
                                         <button class="btn btn-success" type="submit">Crear categoria</button>
                                    <a href="{{ route('ci.index') }}"><button class="btn btn-danger">Cancelar</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>

@endsection

@section('bottom-js')

<script src="{{asset('assets/js/projects.js')}}"></script>
<script src="{{asset('assets/js/form.validation.script.js')}}"></script>

@endsection