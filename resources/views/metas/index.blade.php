@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')




<div class="row mb-4">


<div class="col-md-9 mb-3">
    <div class="card text-left">

        <div class="card-body">
            <h4 class="card-title mb-3">Metas actualmente registradas</h4>
            <p>Se muestra todas las metas actualmente registradas en el sistema.</p>
                <a style="margin: 19px;" href="{{ url('/metas/create')}}" class="btn btn-primary">Nuevo Meta</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Meta</th>
                            <th scope="col">Fecha Limite</th>

                            <th scope="col">Producto Asociado</th>
                            <th scope="col">Status</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($metas as $meta)
                        <tr>
                            <th scope="row"> {{ $loop->iteration }} </th>
                            <td>{{ $meta->nombre }}</td>
                            <td> {{ $meta->fecha_limite}} </td>
                            
                            
                            <td> {{$meta->id_producto}} </td>
                                
                            

                            <td>
                            @if ($meta->estado == true)
                            <span class="badge badge-success">Activo</span></td>
                            @else
                            <span class="badge badge-warning">Inactivo</span></td>
                            @endif
                            <form action="{{ route('metas.destroy', $meta->id) }}" method="POST">                                                    
                            @csrf
                            @method('DELETE')
                            
                            <td>
                                <a href="{{ route('metas.edit', $meta->id)}}"> <button type="button" class="btn btn-success "> 
                                <i class="nav-icon i-Pen-2 "></i>
                            </button> </a>

                            <button type="submit" class="btn btn-danger ">
                                <i class="nav-icon i-Close-Window "></i>
                            </button>
                            </form>
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
