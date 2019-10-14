@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Editar</h1>
                <ul>
                    <li>Roles</li>
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Editar Rol</div>

                            <form method="POST" action="{{ route( 'roles.update', $roles->id) }}" enctype="multipart/form-data">

                                
                                @csrf
                                @method('PATCH')
                                
                                 <div class="form-group">
                                    <label>Descripcion del Rol</label>
                                    <div class="col-md-8">
                                        <input type="text" name="descripcion" value="{{ $roles->descripcion }}" class="form-control input-lg" />
                                    </div>
                                </div>

                                <div class="form-group text-left">
                                    <input type="submit" name="edit" class="btn btn-primary input-lg" value="Actualizar" />

                                    <a style="margin: 19px;" href="{{ url('roles')}}" class="btn btn-primary">Regresar</a>
                                    
                                </div>

                                  <div class="field">
                                    </div>

                               
                             </form>  


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
