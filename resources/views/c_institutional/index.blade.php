@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Categoría Institucional</h1>
                <ul>
                    <li> </li>
                    <li><a href="">Home</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>
            
            <div class="col-md-12">
                <div class="col-md-4">
                <a href="{{ route('ci.create') }}"><button type="button" class="btn btn-primary btn-block m-1 mb-3" >
                        <i class="nav-icon i-Administrator"></i> Nuevo Categoría
                    </button></a>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_configuration_table" class="display table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre</th>
                                        <th>Estatus</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>    
                                <tbody>
                                    @foreach ($ci as $key=>$c)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $c->name}}</td>
                                        <td>{!! ($c->status != 0 ) ? '<span class="badge badge-pill badge-success p-2 m-1">Activo</span>': '<span class="badge badge-pill badge-danger p-2 m-1">Inactivo</span>' !!}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn bg-white _r_btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item" href="{{ url("/ci/$c->id/edit") }}">Actualizar</a>
                                                    <div class="dropdown-divider"></div>
                                                    
                                                    <form action="{{ url("/ci/$c->id") }}" method="post">
                                                        <input class="dropdown-item" type="submit" value="Eliminar" />
                                                        <input type="hidden" name="_method" value="delete" />
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
