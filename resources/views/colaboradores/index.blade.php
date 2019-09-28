@extends('layouts.master')
@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">


@endsection

@section('main-content')
   <div class="breadcrumb">
                <h1>Colaboradores</h1>
                <ul>
                    
                    <li><a href="">GESTION</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Listado de Colaboradores
                                <a style="margin: 19px;" href="{{ url('/colaboradores/create')}}" class="btn btn-primary">Nuevo Colaborador</a>
                            </div>
                            
                                <div class="row">

                                     <table class="table table-light">
                                         <thead class="thead-light">
                                             <tr>
                                                 <th>Id</th>
                                                 <th>Nombre</th>
                                                 <th>Apellido</th>
                                                 <th>Dirección</th>
                                                 <th>Teléfono</th>
                                                 <th>Email</th>
                                                 <th>Género</th>
                                                 <th>Fecha de Nacimiento</th>
                                                 <th>Nivel Académico</th>
                                                 <th>Título</th>
                                                
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach($colaboradores as $colaboradores)
                                             <tr>
                                                 <td>{{$loop->iteration}}</td>
                                                 <td>{{ $colaboradores->nombrecolaborador}}</td>
                                                 <td>{{ $colaboradores->apellidocolaborador}}</td>
                                                 <td>{{ $colaboradores->direccioncolaborador}}</td>
                                                 <td>{{ $colaboradores->telefonocolaborador}}</td>
                                                 <td>{{ $colaboradores->emailcolaborador}}</td>
                                                 <td>{{ $colaboradores->genero}}</td>
                                                 <td>{{ $colaboradores->fechanacimiento}}</td>
                                                 <td>{{ $colaboradores->nivelacademico}}</td>
                                                 <td>{{ $colaboradores->titulo}}</td>
                                                 
                                                 <td>

                                                    <a href="{{ route('colaboradores.edit', $colaboradores->id)}}" class="btn btn-warning">Editar</a>

                                                     <td>
                                                     <form action="{{ route('colaboradores.destroy', $colaboradores->id) }}" method="POST">
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

                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Switch</div>
                            <label class="switch switch-primary mr-3">
                                <span>Primary</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-secondary mr-3">
                                <span>Secondary</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-success mr-3">
                                <span>Success</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-warning mr-3">
                                <span>Warning</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-danger mr-3">
                                <span>Danger</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-light mr-3">
                                <span>Light</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <label class="switch switch-dark mr-3">
                                <span>Dark</span>
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Checkbox Default</div>
                            <label class="checkbox checkbox-primary">
                                <input type="checkbox" checked>
                                <span>Primary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-secondary">
                                <input type="checkbox" checked>
                                <span>Secondary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-success">
                                <input type="checkbox" checked>
                                <span>Success</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-warning">
                                <input type="checkbox" checked>
                                <span>Warning</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-danger">
                                <input type="checkbox" checked>
                                <span>Danger</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-info">
                                <input type="checkbox" checked>
                                <span>Info</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-dark">
                                <input type="checkbox" checked>
                                <span>Dark</span>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Checkbox Outline</div>
                            <label class="checkbox checkbox-outline-primary">
                                <input type="checkbox" checked>
                                <span>Primary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-secondary">
                                <input type="checkbox" checked>
                                <span>Secondary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-success">
                                <input type="checkbox" checked>
                                <span>Success</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-warning">
                                <input type="checkbox" checked>
                                <span>Warning</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-danger">
                                <input type="checkbox" checked>
                                <span>Danger</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-info">
                                <input type="checkbox" checked>
                                <span>Info</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox checkbox-outline-dark">
                                <input type="checkbox" checked>
                                <span>Dark</span>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body" [formGroup]="radioGroup">
                            <div class="card-title">Radio Button</div>
                            <label class="radio radio-primary">
                                <input type="radio" name="radio" [value]="1" formControlName="radio">
                                <span>Primary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-secondary">
                                <input type="radio" name="radio" [value]="2" formControlName="radio">
                                <span>Secondary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-success">
                                <input type="radio" name="radio" [value]="3" formControlName="radio">
                                <span>Success</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-warning">
                                <input type="radio" name="radio" [value]="4" formControlName="radio">
                                <span>Warning</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-danger">
                                <input type="radio" name="radio" [value]="5" formControlName="radio">
                                <span>Danger</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-light">
                                <input type="radio" name="radio" [value]="6" formControlName="radio">
                                <span>Light</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-dark">
                                <input type="radio" name="radio" [value]="7" formControlName="radio">
                                <span>Dark</span>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body" [formGroup]="radioGroup">
                            <div class="card-title">Radio Button Outline</div>
                            <label class="radio radio-outline-primary">
                                <input type="radio" name="radio" [value]="1" formControlName="radio">
                                <span>Primary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-secondary">
                                <input type="radio" name="radio" [value]="2" formControlName="radio">
                                <span>Secondary</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-success">
                                <input type="radio" name="radio" [value]="3" formControlName="radio">
                                <span>Success</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-warning">
                                <input type="radio" name="radio" [value]="4" formControlName="radio">
                                <span>Warning</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-danger">
                                <input type="radio" name="radio" [value]="5" formControlName="radio">
                                <span>Danger</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-light">
                                <input type="radio" name="radio" [value]="6" formControlName="radio">
                                <span>Light</span>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio radio-outline-dark">
                                <input type="radio" name="radio" [value]="7" formControlName="radio">
                                <span>Dark</span>
                                <span class="checkmark"></span>
                            </label>
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
