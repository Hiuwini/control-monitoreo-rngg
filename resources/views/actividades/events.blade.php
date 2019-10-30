@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Eventos</h1>
                <ul>
                    <li>Eventos</li>
                    <li><a href="">{{$project->name}}</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>
            
            <div class="col-md-12">
                <div class="col-md-4">
                <a style="margin: 19px;" href="/actividades/create/{{$i->id}}" class="btn btn-primary">Nuevo Evento</a>
                
                </div>
                <div class="card mb-4">
                    <p>Los eventos contribuyen al siguiente indicador: <b>{{$i->name}}</b></p>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_configuration_table" class="display table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Cantidad proyectada</th>
                                        <th>Duración en horas</th>
                                    </tr>
                                </thead>    
                                <tbody>
                                    @foreach ($actividades as $key=>$actividad)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $actividad->nombre}}</td>
                                        <td>{{ $actividad->descripcion}}</td>
                                        <td>{{ $actividad->fecha}}</td>
                                        <td>{{ $actividad->cantidadProyectada}}</td>
                                        <td>{{ $actividad->duracion}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn bg-white _r_btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item" href="/participantes/{{$actividad->id}}">Ver Participantes</a>
                                                    <a class="dropdown-item" href="{{ route('actividades.edit', $actividad->id)}}">Actualizar</a>
                                                    <div class="dropdown-divider"></div>
                                                    
                                                    <form action="{{ route('actividades.destroy', $actividad->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input class="dropdown-item" type="submit" value="Eliminar" />
                                                    </form>
                                                
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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


@endsection
