@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">

 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endsection

@section('main-content')
<div class="breadcrumb">
    <h1>Adminisracion de Permisos</h1>
    <ul>
        <li><a href="">Permisos</a></li>
        <li>Lista de Usuarios</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>
<section class="widgets-content">
    <div class="">
    <!-- begin::users -->
    <div class="col-lg-6 col-md-8 col-xl-6 mb-6">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">
                                    Usuarios Actuales
                                </h3>
                            </div>
                            
                        </div>
                        <div class="ul-widget__body">
                            <div class="tab-content">
       
                                @foreach($users as $user)
                                    <div class="ul-widget1">
                                        <div class="ul-widget4__item  ul-widget4__users">
                                        
                                            <div class="ul-widget2__info ul-widget4__users-info">
                                                <a href="#" class="ul-widget2__title">
                                                    <b>Nombre: </b> {{$user->firstname}}, {{$user->lastname}}
                                                </a>
                                                <span href="#" class="ul-widget2__username">
                                                    
                                                    <b>Usuario: </b> {{$user->username}}
                                                    <br> <b>E-mail: </b> {{$user->email}}
                                                    
                                                </span>                                                
                                            </div>
                                            <div class="ul-widget4__actions">
                                            <a href="/permisos/edit/{{ $user->id }}">
                                                 <button  type="button" class="btn btn-outline-danger m-1">
                                                    Permisos
                                                </button>                                                
                                                </a>
                                            </div>

                                            <div class="ul-widget4__actions">
                                            <a href="/permisosprojects/edit/{{ $user->id }}">
                                                 <button  type="button" class="btn btn-outline-danger m-1">
                                                    Proyectos
                                                </button>                                                
                                                </a>
                                            </div>
                                            
                                        </div>
                                        @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::users -->
    </div>
</section>

@endsection


@section('page-js')
<script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>

<script src="{{asset('assets/js/es5/widget-list.min.js')}}"></script>

<script src="{{asset('assets/js/tooltip.script.js')}}"></script>
@endsection

@section('bottom-js')


@endsection