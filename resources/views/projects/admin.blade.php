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
                                    <!--<li class="nav-item">
                                        <a class="nav-link" id="contact-basic-tab" data-toggle="tab" href="#goals" role="tab" aria-controls="goals" aria-selected="false">Metas</a>
                                    </li>-->
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
                                                <h5><b>Progreso por fecha</b></h5>
                                                        <div class="progress mb-3">
                                                        
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" 
                                                                style="width: {{ number_format((int)$p[0]->percentage , 0, '.', '') }}%" aria-valuenow="{{ number_format((int)$p[0]->percentage , 0, '.', '') }}" aria-valuemin="0" 
                                                                    aria-valuemax="100">{{ number_format((int)$p[0]->percentage , 0, '.', '') }}%</div>
                                                        </div>

                                                    <h5><b>{{$p[0]->name}}</b> - Progreso de proyecto </h5>                                                    
                                                    @foreach($indicators as $i)
                                                        <h6>{{$i->name}}</h6>
                                                        <div class="progress mb-3">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" 
                                                                style="width: {{ number_format((int)$i->percentage , 0, '.', '') }}%" aria-valuenow="{{ number_format((int)$i->percentage , 0, '.', '') }}" aria-valuemin="0" 
                                                                    aria-valuemax="100">{{ number_format((int)$i->percentage , 0, '.', '') }}%</div>
                                                        </div>
                                                        @endforeach
                                                        
                                                        

                                                        <h5><b>Descripción</b></h5>
                                                    
                                                    <p>{{$p[0]->description}}</p>                                                    
                                                    
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="indicators" role="tabpanel" aria-labelledby="profile-basic-tab">
                                        <!-- Aqui van el codigo de los indicadores -->    
                                        <a style="margin: 19px;" href="/indicators/create/{{ $p[0]->id }}" class="btn btn-primary">
                                            Nuevo Indicador
                                        </a>
                                        <div class="row">
                                        <table id="zero_configuration_table" class="display table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Indicador</th>
                                                        <th>Tipo</th>
                                                        <th>Avance</th>
                                                        <th>Meta</th>
                                                        <th>% de Avance</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($indicators as $i)
                                                    <tr>
                                                        <th scope="row"> {{ $loop->iteration }} </th>
                                                        <td>{{ $i->name }}</td>
                                                        @if ($i->type == 1)
                                                            <td> Asesorías individuales </td>
                                                        @elseif($i->type == 2)
                                                            <td> Eventos </td>
                                                        @else 
                                                            <td> Personalizado </td>
                                                        @endif
                                                        <td>{{ number_format((int)$i->accumulated , 0, '.', '') }}</td>
                                                        <td>{{ number_format((int)$i->goal , 0, '.', '') }}</td>
                                                        <td>{{ number_format((int)$i->percentage , 0, '.', '') }} %</td>
                                                        
                                                       <td>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn bg-white _r_btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                                </button>
                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                    @if ($i->type == 3)                                                        
                                                                        <a class="dropdown-item" href="/indicator/{{$i->id}}">Administrar</a>
                                                                    @elseif($i->type == 2)
                                                                        <a class="dropdown-item" href="#">Ver Eventos</a>
                                                                    @else
                                                                        <a class="dropdown-item" href="/beneficios/{{$i->id}}">Administrar</a>
                                                                    @endif
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="{{ url("/indicators/$i->id/edit") }}">Actualizar</a>
                                                                    <form action="/indicators/{{$i->id}}" method="POST">                                                    
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
                                    <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="contact-basic-tab">
                                        <!-- Aqui van el codigo de las actividades -->    
                                        <a style="margin: 19px;" href="{{ route('actividades.create', $p[0]->id)}}" class="btn btn-primary">Nueva Actividad</a>
                                        <div class="row">

                                     <table class="table table-light">
                                         <thead class="thead-light">
                                             <tr>
                                                 <th>Id</th>
                                                 <th>Nombre</th>
                                                 <th>Descripción</th>
                                                 <th>Fecha</th>
                                                 <th>Cantidad proyectada</th>
                                                 <th>Duración en horas</th>
                                                 <th>Proyecto</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                            
                        @foreach($actividades as $actividad)
                        <tr>
                            <th scope="row"> {{ $loop->iteration }} </th>
                            <td>{{ $actividad->nombre }}</td>
                            <td>{{ $actividad->descripcion}} </td>
                            <td>{{ $actividad->fecha }}</td>
                            <td>{{ $actividad->cantidadProyectada }}</td>
                            <td>{{ $actividad->duracion }}</td>
                            
                            
                            <td>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn bg-white _r_btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                                    <span class="_dot _inline-dot bg-primary"></span>
                                                                </button>
                                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                                    
                                                                        <a class="dropdown-item" href="/beneficios/{{$actividad->id}}">Administrar</a>
                                                                    
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="{{ url("/indicators/$i->id/edit") }}">Actualizar</a>
                                                                    <form action="/indicators/{{$i->id}}" method="POST">                                                    
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
                                    <div class="tab-pane fade" id="goals" role="tabpanel" aria-labelledby="contact-basic-tab">
                                        <!-- Aqui van el codigo de las metas -->    
                                        <a style="margin: 19px;" href="{{ route('metas.create', $p[0]->id)}}" class="btn btn-primary">Nueva Meta</a>
                                        <!-- Metas atadas al proyecto -->
                                        <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Meta</th>
                            <th scope="col">Fecha Limite</th>

                            <th scope="col">Proyecto Asociado</th>
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
                            <td> {{$meta->id_proyecto}} </td>
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