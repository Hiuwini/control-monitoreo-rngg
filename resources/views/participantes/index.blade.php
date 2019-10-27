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
   <div class="breadcrumb">
                <h1>Beneficiados</h1>
                <ul>
                    
                    <li><a href="">{{$project->name}}</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Listado de Beneficiarios
                                <a style="margin: 19px;" href="{{ url("/beneficiarios/create/?id=$actividad->id".'&type=actividades') }}" class="btn btn-primary">Nuevo Beneficiario</a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".beneficiary">Buscar Beneficiario</button>
                            </div>
                            
                                <div class="row">
                                <p>Los beneficiarios participaron en el evento: <b>{{$actividad->nombre}}</b></p>
                                     <table class="table table-light">
                                         <thead class="thead-light">
                                             <tr>
                                                 <th>No</th>
                                                 <th>Nombre</th>
                                                 <th>Apellido</th>
                                                 <th>Género</th>
                                                 <th>Rango de Edad</th>
                                                 <th>Ubicación</th>
                                                 
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach($beneficiarios as $beneficario)
                                             <tr>
                                                 <td>{{$loop->iteration}}</td>
                                                 <td>{{ $beneficario->nombrebeneficiario}}</td>
                                                 <td>{{ $beneficario->apellidobeneficiario}}</td>
                                                 <td>{{ $beneficario->genero}}</td>
                                                 <td>{{ $beneficario->rangoedad}}</td>
                                                 <td>{{ $beneficario->nombreubicacion}}</td>
                                                 
                                                 <td>

                                                    <a href="{{ route('beneficiarios.edit', $beneficario->beneficiario_id)}}" class="btn btn-warning">Editar</a>

                                                     <td>
                                                     <form action="/participantes/{{$beneficario->id}}/{{$actividad->id}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </td>
                                                     
                                                    </td>
                                                    </form>
                                                 </td>
                                                 
                                             </tr>

                                             @endforeach
                                            
                                         </tbody>
                                        
                                     </table>  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade beneficiary" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Seleccionar beneficiarios</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                                <table id="example" class="display table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>DPI/CUI</th>
                                            <th>Teléfono</th>
                                            <th>Email</th>
                                            <th>Agregar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($all as $beneficiary)
                                        <tr>
                                            <td>{{ $beneficiary->nombrebeneficiario }}</td>
                                            <td>{{ $beneficiary->apellidobeneficiario }}</td>
                                            <td>{{ $beneficiary->dpicui }}</td>
                                            <td>{{ $beneficiary->telefono }}</td>
                                            <td>{{ $beneficiary->emailbeneficiario }}</td>
                                            <td>
                                                <label class="checkbox checkbox-primary">
                                                    <input type="checkbox" class="adding" value="{{$beneficiary->id}}">
                                                    <span> Agregar </span>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
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
                                            <th>Agregar</th>
                                        </tr>
                                    </tfoot>
                                </table>
    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" id="send_items">Agregar a indicador</button>
                            </div>
                        </div>
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
    $('#send_items').click(function(){
        //alert();
        //console.log($("input.adding:checkbox"));
        var inputs = $("input.adding:checked");
        var ids = [];
        ids.push({{$actividad->id}});
        $.each(inputs,function(i,val){
            ids.push(val.value);
        });
        
        $.ajax({
                url: "/participantes/store/"+JSON.stringify(ids),
                type: "GET",
                success: function(data) {
                    location.reload();
                },
                error: function(data){
                    console.log(data);
                }
            });
    });
} );
</script>

@endsection

@section('bottom-js')
<script src="{{asset('assets/js/form.basic.script.js')}}"></script>


@endsection