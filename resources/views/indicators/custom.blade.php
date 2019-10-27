@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">

 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Actualizar</h1>
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
                            <div class="card-title mb-3">Actualizar Indicador</div>
                            <form class="needs-validation" novalidate method="POST" action="{{ url("/indicator/$i->id") }}">
                                {{ method_field('PUT') }}                            
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName">Nombre</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                    name="name" id="name" placeholder="Nombre de indicador" value="{{ $i->name }}" required>
                                    </div>
                                   
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="status">Estatus</label>
                                        <select name="status"  class="form-control form-control-rounded" required>
                                            <option value="1" {{ ($i->status == 1) ? 'selected':''  }}>En proceso</option>
                                            <option value="2" {{ ($i->status == 2) ? 'selected':''  }}>Cumplido</option>
                                            <option value="0" {{ ($i->status == 0) ? 'selected':''  }}>Anulado</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group mb-3" id="metrics">
                                        <label for="metric">Métrica</label>
                                        <select name="metric" class="form-control form-control-rounded">
                                            <option selected disabled>-- Elegir métrica de medición --</option>
                                            <option value="1" {{ ($i->metric == 1) ? 'selected':''  }}>Descriptiva</option>
                                            <option value="2" {{ ($i->metric == 2) ? 'selected':''  }}>Porcentual</option>
                                            <option value="3" {{ ($i->metric == 3) ? 'selected':''  }}>Monetaria</option>
                                            <option value="4" {{ ($i->metric == 4) ? 'selected':''  }}>Númerica</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="accumulated">Avance Actual</label>
                                        <input type="number" class="form-control form-control-rounded" 
                                    name="accumulated" id="accumulated" placeholder="0.00" value="{{$i->accumulated}}">
                                    </div>
                                   
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="phone1">Meta</label>
                                        <input type="number" class="form-control form-control-rounded" 
                                            name="goal" id="goal" placeholder="0.00" value="{{$i->goal}}">
                                    </div>
                                    
                                    <div class="col-md-12">
                                         <button class="btn btn-success" type="submit">Actualizar Indicador</button>
                                    <a style="margin: 19px;" href="/project/{{$i->id_proyecto}}" class="btn btn-danger m-1">Cancelar</a>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

@endsection

@section('bottom-js')

@endsection