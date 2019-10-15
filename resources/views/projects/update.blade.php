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
                    <li>Proyecto</li>
                    <li><a href="">Administración</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Actualizar Proyecto</div>
                        <form class="needs-validation" novalidate method="POST" action="{{ url("/projects/$p->id") }}">
                            {{ method_field('PUT') }}                            
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName">Nombre</label>
                                        <input type="text" class="form-control form-control-rounded" 
                                    name="name" id="name" placeholder="Nombre de proyecto" required value="{{ $p->name }}">
                                    </div>
                                    
                                    <div class="col-md-6 form-group mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Descripción</span>
                                            </div>
                                            <textarea class="form-control" name="description" aria-label="With textarea">{{ $p->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="status">Estatus</label>
                                        <select name="status" class="form-control form-control-rounded">
                                            <option value="0" {{ ($p->status == 0 ) ? 'selected':'' }}>Propuesta</option>
                                            <option value="1" {{ ($p->status == 1 ) ? 'selected':'' }}>En Ejecución</option>
                                            <option value="2" {{ ($p->status == 2 ) ? 'selected':'' }}>Ejecutado</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="date_begin">Fecha de inicio</label>
                                        <div class="input-group">
                                            <input id="date_begin" name="date_begin" class="form-control form-control-rounded" placeholder="yyyy-mm-dd" value="{{ $p->date_begin }}" >
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary btn-rounded"  type="button">
                                                    <i class="icon-regular i-Calendar-4"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="date_end">Fecha de finalización</label>
                                        <div class="input-group">
                                        <input id="date_end" name="date_end" class="form-control form-control-rounded" placeholder="yyyy-mm-dd" value="{{ $p->date_end }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary btn-rounded"  type="button">
                                                    <i class="icon-regular i-Calendar-4"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 form-group mb-3">                                    
                                        <label for="users">Encargado / Coordinador  </label>
                                        <select class="form-control form-control-rounded" id="user_id" name="user_id">
                                            @foreach ($u as $user)
                                                <option selected disabled>-- Elegir usuario --</option>
                                                <option value="{{ $user->id }}" {{ ($user->id == $p->user_id) ? 'selected':''  }}>
                                                    {{ $user->firstname }} {{ $user->lastname }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-12">
                                         <button class="btn btn-success" type="submit">Actualizar proyecto</button>
                                    <a href="{{ route('projects.index') }}"><button class="btn btn-danger">Cancelar</button></a>
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
<script>
$(document).ready(function() {
    $('#user_id').select2();
});
</script>

@endsection

@section('bottom-js')

<script src="{{asset('assets/js/projects.js')}}"></script>
<script src="{{asset('assets/js/form.validation.script.js')}}"></script>

@endsection