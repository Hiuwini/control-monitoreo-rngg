@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Actualizar</h1>
                <ul>
                    <li>Usuario</li>
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Actualizar Usuario</div>
                        <form class="needs-validation" novalidate method="POST" action="{{ url("/admin/users/$u->id") }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $u->id }}" />
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName">Nombres</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                            name="firstname" id="firstname" placeholder="Ingrese nombres" value="{{ $u->firstname }}" required>
                                    </div>
                                    
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="lastName">Apellidos</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                            name="lastname" id="lastname" placeholder="Ingrese apellidos" value="{{ $u->lastname }}" required>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="username">Nombre de usuario</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                    name="username" id="username" placeholder="Ingrese nombre de usuario" value="{{ $u->username }}" required>
                                    </div>
                                    
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="email">Correo Electrónico</label>
                                        <input type="email" class="form-control form-control-rounded" 
                                            name="email" id="email"  placeholder="Ingrese correo electrónico" value="{{ $u->email }}" required>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="phone1">Teléfono / Celular</label>
                                        <input type="number" class="form-control form-control-rounded" 
                                    name="phone1" id="phone1" placeholder="Ingrese teléfono o celular" value="{{ $u->phone }}">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="status">Estatus</label><br>
                                        <label class="switch switch-primary mr-3">
                                                <span>Activo / Inactivo</span>
                                                <input type="checkbox" name="status" id="status" {{ ($u->status == 1) ? 'checked':''}}>
                                                <span class="slider"></span>
                                        </label>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="job">Puesto dentro de la institución</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                            name="job" id="job" placeholder="Puesto de trabajo" value="{{ $u->job }}">
                                    </div>
                                    
                                    <div class="col-md-6 form-group mb-3">
                                        <!-- <label for="lastName">Apellidos</label>
                                        <input type="text" class="form-control form-control-rounded" id="lastName" placeholder="Ingrese apellidos"> -->
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="password">Contraseña</label>
                                        <input id="password" class="form-control form-control-rounded" 
                                            name="password" type="password" required>
                                    </div>
                                    
                                    <!--<div class="col-md-6 form-group mb-3">
                                        <label for="repassword">Confirmar Contraseña</label>
                                        <input id="repassword" class="form-control form-control-rounded" 
                                            name="repassword" type="password" required>
                                    </div>-->
                                    
                                   
                                    <div class="col-md-12">
                                         <button class="btn btn-success" type="submit">Actualizar usuario</button>
                                    <a href="{{ route('dashboard_version_1') }}"><button class="btn btn-danger">Cancelar</button></a>
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

<script src="{{asset('assets/js/form.basic.script.js')}}"></script>
<script src="{{asset('assets/js/form.validation.script.js')}}"></script>

@endsection