@extends('layouts.master')
@section('main-content')
           <div class="breadcrumb">
                <h1>Version 1</h1>
                <ul>
                    <li><a href="">Reportes / Estadisticas</a></li>
                    <li>Categoria Institucional </li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <!-- ICON BG -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Add-User"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Beneficiarios (H/M): </p>
                                <?php $cantHombres= \App\Beneficiarios::select('id')->where('genero','=','Masculino')->count();
                                    $cantMujeres= \App\Beneficiarios::select('id')->where('genero','=','Femenino')->count();
                                ?>
                                <p class="text-primary text-18 line-height-1 mb-2">Total: {{$cantbeneficiarios}} <br> 
                                {{$cantHombres}} / {{$cantMujeres}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Financial"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Proyectos: </p>
                                <p class="text-primary text-24 line-height-1 mb-2">{{$cantprojects}}</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Money-2"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Expense</p>
                                <p class="text-primary text-24 line-height-1 mb-2">$1200</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-title mb-3">Prueba de graficas
                    <a style="margin: 19px;" href="{{ url('/graficas/generototal')}}" class="btn btn-primary">Grafica de Genero</a>
                </div>

            </div>

            <div class="col-md-6 form-group mb-3">
                                <label for="chkdetail">Ver detalles de proyectos: </label><br>
                                <label class="switch switch-primary mr-3">
                                        <span>Si / No</span>
                                        <input type="checkbox" name="chkdetail" id="chkdetail" >
                                        <span class="slider"></span>
                                </label>
                            </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card o-hidden mb-4">
                                <div class="card-header d-flex align-items-center border-0">
                                    <h3 class="w-50 float-left card-title m-0">Resumen de Proyectos: </h3>
                                    <div class="dropdown dropleft text-right w-50 float-right">
                                        <button class="btn bg-gray-100" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="nav-icon i-Gear-2"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="#">Add new user</a>
                                            <a class="dropdown-item" href="#">View All users</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Proyecto</th>
                                                    <th scope="col">Fecha Inicio</th>
                                                    <th scope="col">Fecha Final</th>
                                                    <th scope="col">Coordinador</th>
                                                    <th scope="col">Avance (en dias) </th>
                                                    <th scope="col">Estado </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <!-- AGREGAR EL FOREACH PARA RECORRER LOS PROYECTOS -->
                                            @foreach($projects as $project)
                                                <tr>
                                                    <th scope="row">{{$loop->iteration}}</th>
                                                    <td>{{$project->name}}</td>
                                                    
                                                    <td>{{$project->date_begin}}</td>

                                                    <td> {{$project->date_end}} </td>
                                                    <?php 
                                                    $data=\App\User::select('firstname','lastname')->where('id','=', $project->user_id)->get()
                                                    ?>
                                                    <td> {{$data[0]->firstname}}, {{$data[0]->lastname}}  </td>
                                                    <td> 
                                                    <?php 
                                                    $date_current = date_create(date('Y-m-d'));
                                                    $datebegin=date_create($project->date_begin);
                                                    $dateend=date_create($project->date_end);
                                                    $current = date_diff($datebegin,$date_current);
                                                    $current = $current->format('%a');
                                                    $diff=date_diff($datebegin,$dateend);
                                                    $diff=$diff->format('%a');
                                                    echo $current . '/' . $diff;
                                                    ?> Dias
                                                    </td>
                                                    <td>
                                                    @if($project->status== 0)
                                                    <span class="badge badge-success"> En ejecucion</span>
                                                    @else
                                                    <span class="badge badge-info"> Concluido</span>
                                                    @endif

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


                <!-- section 4 -->
                <section class="ul-widget-stat-s3" id="detailprojects">
                                            
                    
                    
                    
                    <div class="row">
                    @foreach ($projects as $project)
                        <!-- service -->
                        <?php 
                                            $date_current = date_create(date('Y-m-d'));
                                            $datebegin=date_create($project->date_begin);
                                            $dateend=date_create($project->date_end);
                                            $current = date_diff($datebegin,$date_current);
                                            $current = $current->format('%a');
                                            $diff=date_diff($datebegin,$dateend);
                                            $diff=$diff->format('%a');
                                            $percentprogress= ($current/$diff) * 100
 
                                            
                        ?>
                        <div class="col-md-3 col-lg-6">
                            <div class="card mb-2  o-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <h5 class="t-font-bolder">{{$project->name}} ({{$project->status == 0 ? 'En Ejecucion' : 'Concluido'}}) </h5>
                                            <small class="text-muted">{{100 - round($percentprogress)}}% restante para concluir el proyecto </small>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h3 class="t-font-boldest">{{round($percentprogress)}} %</h3>
                                            <small class="text-muted"><?php 
                                            echo $diff - $current;
                                            
                                            ?> dias restantes</small>
                                        </div>
                                        <div class="col-12">
                                        <b> Indicadores: </b><br><br>
                                        @foreach( (\App\Indicator::select('name','goal','accumulated','percentage')->where('id_proyecto','=',$project->id)->get()) as $indicator)
                                        <small>{{$loop->iteration }}.- {{$indicator->name}} </small>
                                            <div class="progress mt-3">                                            
                                                <div class="progress-bar bg-success" role="progressbar" style="width: {{ number_format((int)$indicator->percentage , 0, '.', '') }}%" aria-valuenow="{{ number_format((int)$indicator->accumulated , 0, '.', '') }}" aria-valuemin="0" aria-valuemax="100">{{ number_format((int)$indicator->percentage , 0, '.', '') }} %</div>
                                            </div>
                                            <br>
                                        @endforeach

                                        <br>
                                        <b> Eventos: </b><br>
                                        @foreach( (\App\Actividades::select('id','nombre','cantidadProyectada')->where('id_proyecto','=',$project->id)->get()) as $activity)
                                        <small>{{$loop->iteration}}.- {{$activity->nombre}} </small>
                                        <?php 
                                                    $totalparticipantes=\App\Participantes::select('beneficiario_id')->where('actividad_id','=', $activity->id)->count();
                                                    $porcentaje= ($totalparticipantes / $activity->cantidadProyectada) * 100;
                                                    
                                                    ?>
                                            <div class="progress mt-3">                                            
                                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ number_format((int)$porcentaje , 0, '.', '') }}%" aria-valuenow="{{ number_format((int)$activity->cantidadProyectada , 0, '.', '') }}" aria-valuemin="0" aria-valuemax="100">{{ number_format((int)$porcentaje , 0, '.', '') }} %</div>
                                            </div>
                                        @endforeach



                                        </div>

                                        


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service -->
                    @endforeach
                        
                    </div>
                    <!-- End Row -->


                </section>
                <!-- end::section 4 -->

                
            </div>


@endsection

@section('page-js')
     <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>

     <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/card.metrics.script.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/widgets-statistics.min.js')}}"></script>
     <script>
$('#detailprojects').hide();

$(document).ready(function() {
   $('#chkdetail').change(function() {
    if($('#chkdetail').is(":checked")) {
            $('#detailprojects').show();
        }
        else {
            $('#detailprojects').hide();        
        }
    });
});
</script>

@endsection
