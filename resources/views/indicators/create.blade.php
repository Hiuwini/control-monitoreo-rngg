@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">

 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Nuevo</h1>
                <ul>
                    <li>Indicador</li>
                    <li><a href="">Proyectos</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Nuevo Indicador</div>
                        <form class="needs-validation" novalidate method="POST" action="{{ url('/indicators/store') }}">
                            {{ csrf_field() }}
                                <div class="row">
                                    <input type="hidden" name="id_project" value="{{ $id_project }}">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName">Nombre</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                            name="name" id="name" placeholder="Nombre de indicador" required>
                                    </div>
                                    
                                    
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="status">Estatus</label>
                                        <select name="status"  class="form-control form-control-rounded" required>
                                            <option value="1" selected>En proceso</option>
                                            <option value="2">Cumplido</option>
                                            <option value="0">Anulado</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="type">Tipo de indicador</label>
                                        <select name="type" id="type" class="form-control form-control-rounded" required>
                                            <option selected disabled>-- Elegir tipo --</option>
                                            <option value="1">Beneficiarios</option>
                                            <option value="2">Actividades</option>
                                            <option value="3">Manual</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group mb-3" id="metrics">
                                        <label for="metric">Métrica</label>
                                        <select name="metric" class="form-control form-control-rounded">
                                            <option selected disabled>-- Elegir métrica de medición --</option>
                                            <option value="1">Descriptiva</option>
                                            <option value="2">Porcentual</option>
                                            <option value="3">Monetaria</option>
                                            <option value="4">Númerica</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="accumulated">Avance Actual</label>
                                        <input type="number" class="form-control form-control-rounded" 
                                            name="accumulated" id="accumulated" placeholder="0.00">
                                    </div>
                                   
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="phone1">Meta</label>
                                        <input type="number" class="form-control form-control-rounded" 
                                            name="goal" id="goal" placeholder="0.00">
                                    </div>
                                   
                                    <div class="col-md-12">
                                         <button class="btn btn-success" type="submit">Crear Indicador</button>
                                    <a style="margin: 19px;" href="/project/{{$id_project}}" class="btn btn-danger m-1">Cancelar</a>
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
<script>

$('#metrics').hide();

$(document).ready(function() {
   $('#type').change(function() {
        if($('#type option:selected').val() == 3) {
            $('#metrics').show();
        }
        else {
            $('#metrics').hide();        
        }
    });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

@endsection

@section('bottom-js')

@endsection