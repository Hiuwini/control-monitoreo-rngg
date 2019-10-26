@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Nuevo</h1>
                <ul>
                    <li>Tipo Gestor</li>
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
             

                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Edicion Grupo Gestor</div>
                            <form class="needs-validation" novalidate method="POST" action="{{url("/tipogestores/$tipogestor->id")}}" >
                            {{ method_field('PUT') }}                            
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
                                <input type="text" name="nombre" id="nombre" class="form-control input-lg"  require value="{{$tipogestor->nombre}}"/>
                            </div>

                             <div class="form-group text-left">
 
                                        <input type="submit" name="" class="btn btn-primary" value="Actualizar">

                                        <a style="margin: 19px;" href="{{ url('/tipogestores')}}" class="btn btn-primary">Regresar</a>
                                    </div>    

@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>



@endsection

@section('bottom-js')
<script src="{{asset('assets/js/form.basic.script.js')}}"></script>


@endsection
