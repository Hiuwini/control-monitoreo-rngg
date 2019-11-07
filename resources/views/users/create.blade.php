@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Nuevo</h1>
                <ul>
                    <li>Usuarios</li>
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Nuevo Usuario</div>
                        <form class="needs-validation" novalidate method="POST" action="{{ url('/admin/users/store') }}">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName">Nombres</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                            name="firstname" id="firstname" placeholder="Ingrese nombres" required>
                                    </div>
                                    
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="lastName">Apellidos</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                            name="lastname" id="lastname" placeholder="Ingrese apellidos" required>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="username">Nombre de usuario</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                           name="username" id="username" placeholder="Ingrese nombre de usuario" required>
                                    </div>
                                    
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="email">Correo Electrónico</label>
                                        <input type="email" class="form-control form-control-rounded" 
                                            name="email" id="email"  placeholder="Ingrese correo electrónico" required>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="phone1">Teléfono / Celular</label>
                                        <input type="number" class="form-control form-control-rounded" 
                                            name="phone1" id="phone1" placeholder="Ingrese teléfono o celular">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="status">Estatus</label><br>
                                        <label class="switch switch-primary mr-3">
                                                <span>Activo / Inactivo</span>
                                                <input type="checkbox" name="status" id="status" checked>
                                                <span class="slider"></span>
                                        </label>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName">Puesto dentro de la institución</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                            name="job" id="job" placeholder="Puesto de trabajo">
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
                                         <button class="btn btn-success" type="submit">Crear usuario</button>
                                    <a href="{{ url('admin/users') }}"><button class="btn btn-danger">Cancelar</button></a>
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