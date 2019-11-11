@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">

 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">

 <style>thead input {
    width: 100%;
}</style>


@endsection

@section('main-content')
{{ csrf_field() }}
@method('POST')                                  
                    
<div class="breadcrumb">
                <h1>REPORTES</h1>
                
            </div>

            <div class="separator-breadcrumb border-top"></div>
            <div class="2-columns-form-layout">
                <div class="">
                    <div class="row">
                        <div class="col-lg-12">                        
                         
                                <!--begin::form-->
                                <form action="">
                                    <div class="card-body">



                         
                                <!-- start card 3 Columns Horizontal Form Layout-->
                                <div class="card ul-card__margin-25">
                                    <div class="card-header bg-transparent">
                                        <h3 class="card-title"> Generar reporte de Beneficiarios</h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="idproject" class="ul-form__label ul-form--margin col-lg-1   col-form-label ">Proyecto: </label>
                                            <div class="col-lg-3 ">
                                            <!-- apartado para cargar todos los proyectos que el usuario puede ver. -->
                                            <select class="form-control" name="idproject" id="idproject">
                                            @foreach($projects as $project)
                                            <option value="{{$project->id}}">{{$project->name}}</option>
                                            @endforeach
                                            </select>
                                            </div>

                            
                            <table id="example" class="display table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>DPI/CUI</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($beneficiarios as $beneficiary)
                                    <tr>
                                        <td>{{ $beneficiary->nombrebeneficiario }}</td>
                                        <td>{{ $beneficiary->apellidobeneficiario }}</td>
                                        <td>{{ $beneficiary->dpicui }}</td>
                                        <td>{{ $beneficiary->telefono }}</td>
                                        <td>{{ $beneficiary->emailbeneficiario }}</td>
                                        
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>DPI/CUI</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                    </tr>
                                </tfoot>
                            </table>

                    
               


                                          

                                            
                         </div>



                                        <div class="custom-separator"></div>

                                        </div>



                                    </div>
                                    <div class="card-footer">
                                        <div class="mc-footer">
                                            <div class="row text-center">
                                                <div class="col-lg-12 ">
                                                
                                                <a href=""> <button class="btn btn-info m-1">Generar PDF</button> </a>

                                            </form>
                                                    <button type="button" class="btn btn-outline-secondary m-1">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card 3 Columns Horizontal Form Layout-->
                            </form>
                            <!-- end::form 3-->





                        </div>

                    </div>
                    <!-- end of main row -->
                </div>
            </div>
                                        
@endsection

@section('page-js')
<script src="{{asset('assets/js/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/js/vendor/pickadate/picker.date.js')}}"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>

<script>
$(document).ready(function() {
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    // Setup - add a text input to each footer cell
    $('#example thead tr').clone(true).appendTo( '#example thead' );
    $('#example thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
 
    var table = $('#example').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
    } );
    
        
      
    });
} );
</script>

@endsection

@section('bottom-js')
<script src="{{asset('assets/js/form.basic.script.js')}}"></script>


@endsection
