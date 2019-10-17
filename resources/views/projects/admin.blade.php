@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">

 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>{{ $p[0]->name }}</h1>
                <ul>
                    <li>Proyecto</li>
                    <li><a href="">RNGG</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-12">
                        <div class="card-body">
                            <div class="card-title mb-3">{{ $p[0]->name }}</div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-basic-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-basic-tab" data-toggle="tab" href="#indicators" role="tab" aria-controls="indicators" aria-selected="false">Indicadores</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-basic-tab" data-toggle="tab" href="#activity" role="tab" aria-controls="activity" aria-selected="false">Actividades</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-basic-tab" data-toggle="tab" href="#goals" role="tab" aria-controls="goals" aria-selected="false">Metas</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="home-basic-tab">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">                                    
                                                    <h5>Nombre del proyecto</h5> <p>{{$p[0]->name}}</p>
                                                    <h5>Fecha de inicio</h5> <p>{{ date("d / M / Y", strtotime( $p[0]->date_begin ) ) }}</p>
                                                    <h5>Fecha de finalización</h5> <p>{{ date("d / m / Y", strtotime( $p[0]->date_end ) ) }}</p>
                                                    <h5>Coodinador</h5> <p>{{$p[0]->firstname}} {{$p[0]->lastname}}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5><b>{{$p[0]->name}}</b> - Progreso de proyecto </h5>                                                    
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                                    </div>
                                                    <h5><b>Descripción</b></h5>
                                                    <p>{{$p[0]->description}}</p>                                                    
                                                    
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="indicators" role="tabpanel" aria-labelledby="profile-basic-tab">
                                        <!-- Aqui van el codigo de los indicadores -->    
                                    </div>
                                    <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="contact-basic-tab">
                                        <!-- Aqui van el codigo de las actividades -->    
                                    </div>
                                    <div class="tab-pane fade" id="goals" role="tabpanel" aria-labelledby="contact-basic-tab">
                                        <!-- Aqui van el codigo de las metas -->    
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                
                
@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<!-- Aqui se edita la grafica -->
<script src="{{asset('assets/js/es5/chartjs.script.min.js')}}"></script>
<!-- Aqui se edita la grafica -->

@endsection

@section('bottom-js')


@endsection