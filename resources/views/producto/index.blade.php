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
            <h4 class="card-title mb-3">Productos actualmente registrados</h4>
            <p>Se muestra todos los productos actualmente registrados en el sistema.</p>
                <a style="margin: 19px;" href="{{ url('/producto/create')}}" class="btn btn-primary">Nuevo Producto</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Proyecto</th>

                            <th scope="col">Categoria</th>
                            <th scope="col">Status</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($producto as $p)
                        <tr>
                            <th scope="row"> {{ $loop->iteration }} </th>
                            <td>{{ $p->componente }}</td>
                            <td> {{ $p->id_proyecto}} </td>
                            <td> {{$p->id_categoria}} </td>
                            <td>
                            @if ($p->status == true)
                            <span class="badge badge-success">Activo</span></td>
                            @else
                            <span class="badge badge-warning">Inactivo</span></td>
                            @endif
                            <form action="{{ route('producto.destroy', $p->id) }}" method="POST">                                                    
                            @csrf
                            @method('DELETE')
                            
                            <td>
                                <a href="{{ route('producto.edit', $p->id)}}"> <button type="button" class="btn btn-success "> 
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
