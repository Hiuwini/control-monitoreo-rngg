@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')

<h3  align="center" class="box-title"><b>REPORTES DEL SISTEMA</b></h3>
         <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                   
                    <thead><tr>
                      <th><b>ID</b></th>
                      <th><b>Nombre</b></th>
                      <th><b>Ver</b></th>
                      <th><b>Representación</b></th>
                      <th><b>Buscar</b></th>
                    </tr></thead>
                    <tbody>
                    
                    <tr>
                      <td>1</td>
                      <td>Listado de Usuarios</td>
                      <td><a href="{{ url('reporte')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="{{ url('chartUsuario')}}" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>Listado de Proyectos que estan activos</td>
                      <td><a href="{{ url('ReporteProyectosAct')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>
                   
                     <tr>
                      <td>3</td>
                      <td>Listado de Proyectos anteriores</td>
                      <td><a href="{{ url('reporteProyectoNoAct')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                      <tr>
                      <td>4</td>
                      <td>Nombre de actividades por proyecto</td>
                      <td><a href="{{ url('reporteActiporProyecto')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                      <tr>
                      <td>5</td>
                      <td>Listado Metas de cada proyecto</td>
                      <td><a href="{{ url('reporteMetasporProyecto')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                      <tr>
                      <td>6</td>
                      <td>Listado de Participantes separados por nombre, apellido, género, rango de edad</td>
                      <td><a href="{{ url('reporteParticipantes')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                      <tr>
                      <td>7</td>
                      <td>Conocer la cantidad de miembros que pertenecen a grupos gestores en cada actividad</td>
                      <td><a href="{{ url('reporteCantidadGG')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                    <tr>
                      <td>8</td>
                      <td>Conocer el número de participantes en los eventos</td>
                      <td><a href="{{ url('reporteParticipantesEvento')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                    <tr>
                      <td>9</td>
                      <td>Reporte sobre el estado de los indicadores</td>
                      <td><a href="{{ url('reporteEstadoIndi')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                    <tr>
                      <td>10</td>
                      <td>Conocer cuantos beneficiario son menores de edad</td>
                      <td><a href="{{ url('reporteMenorEdad')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                    <tr>
                      <td>11</td>
                      <td>Conocer cuantos beneficiario son mayores de edad</td>
                      <td><a href="{{ url('reporteMayorEdad')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                    <tr>
                      <td>12</td>
                      <td>Nombre de cada actividad</td>
                      <td><a href="{{ url('reporteNombreActividad')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                    <tr>
                      <td>13</td>
                      <td>Conocer responsables de cada actividad</td>
                      <td><a href="{{ url('reporteResponsableActividad')}}" target="_blank" ><button class="btn btn-primary">Archivo PDF</button></a></td>
                      <td><a href="crear_reporte_porusuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Gráfica</button></a></td>
                    </tr>

                    <tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
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
