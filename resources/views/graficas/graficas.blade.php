@extends('layouts.master')

@section('before-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/pickadate/classic.date.css')}}">
@endsection

@section('main-content')

           <div class="breadcrumb">
                <h1>GRÁFICA</h1>
                <ul>
                    <li><a href="">Beneficiarios de</a></li>
                    <li>Red Nacional Grupo Gestores</li>
                </ul>
            </div>
 
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card mb-4">
                        <div class="card- body">
                            <div class="card-title">Gráfica de Género</div>
                            <div id="echartBarGenero" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Gráfica de Género</div>  
                            <div id="echartPieGenero" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Gráfica de Edad</div>
                            <div id="echartBarEdad" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Gráfica de Edad</div> 
                            <div id="echartPieEdad" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('page-js')
     <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
     <script >
     //PARA GRAFICAR

'use strict';

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };
var cantF,cantM,maxGenero,deCuanto,uno,dos,tres,cuatro,cinco,maxedad,cuantoedad;
//-------------------------------------------variables para genero
cantF={{$cantFemenina}};
cantM={{$cantMasculino}};
maxGenero={{$maxGenero}};
deCuanto=maxGenero/4;
//------------------------------------------variables para rango de edad
uno={{$rangoUno}};
dos={{$rangoDos}};
tres={{$rangoTres}};
cuatro={{$rangoCuatro}};
cinco={{$rangoCinco}};
maxedad={{$maximo}};
cuantoedad=maxedad/4;

$(document).ready(function () {
//------------------------------------------------inicio genero
    //PARA GRAFICAS PIE
var echartElemPie = document.getElementById('echartPieGenero');
if (echartElemPie) {
    var echartPie = echarts.init(echartElemPie);
    echartPie.setOption({
        color: ['#62549c', '#7566b5', '#7d6cbb', '#8877bd', '#9181bd', '#6957af'],
        tooltip: {
            show: true,
            backgroundColor: 'rgba(0, 0, 0, .8)'
        },
        series: [{
            name: 'Género',//descripción flotante de los valores
            type: 'pie',
            radius: '60%',
            center: ['50%', '50%'],
            //ingresar los valores y etiquetas para cada lado
            
            data: [{ value: cantM, name: 'Masculino ' }, { value: cantF, name: 'Femenino' }],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }]
    });
    $(window).on('resize', function () {
        setTimeout(function () {
            echartPie.resize();
        }, 500);
    });
}
//PARA GRAFICAS DE BARRA
var echartElemBar = document.getElementById('echartBarGenero');
if (echartElemBar) {
    var echartBar = echarts.init(echartElemBar);
    echartBar.setOption({
        legend: {
            borderRadius: 0,
            orient: 'horizontal',
            x: 'right',
            data: ['']//identificador externo para la barra
        },
        grid: {
            left: '8px',
            right: '8px',
            bottom: '0',
            containLabel: true
        },
        tooltip: {
            show: true,
            backgroundColor: 'rgba(0, 0, 0, .8)'
        },
        xAxis: [{
            type: 'category',
            data: ['Masculino','Femenino'], //subtitulos para cada barra ['M', 'F']
            axisTick: {
                alignWithLabel: true
            },
            splitLine: {
                show: false
            },
            axisLine: {
                show: true
            }
        }],
        yAxis: [{
            type: 'value',
            axisLabel: {
                formatter: '{value}'
            },
            min: 0,
            max: maxGenero,//valor maximo
            interval: deCuanto,//intevalos que se desea la grafica.
            axisLine: {
                show: false
            },
            splitLine: {
                show: true,
                interval: 'auto'
            }
        }],

        series: [{
            name: 'Género',
            data: [cantM,cantF],//ingreso de valores
            label: { show: false, color: '#0168c1' },
            type: 'bar',
            barGap: 0,
            color: '#bcbbdd',
            smooth: true,
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowOffsetY: -2,
                    shadowColor: 'rgba(0, 0, 0, 0.3)'
                }
            }
        }]
    });
    $(window).on('resize', function () {
        setTimeout(function () {
            echartBar.resize();
        }, 500);
    });
}
//------------------------------------------------fin genero
//-----------------------------------------------------------inicio rango de edad
var echartElemPie = document.getElementById('echartPieEdad');
if (echartElemPie) {
    var echartPie = echarts.init(echartElemPie);
    echartPie.setOption({
        color: ['#62549c', '#7566b5', '#7d6cbb', '#8877bd', '#9181bd', '#6957af'],
        tooltip: {
            show: true,
            backgroundColor: 'rgba(0, 0, 0, .8)'
        },
        series: [{
            name: 'Rango de edad',//descripción flotante de los valores
            type: 'pie',
            radius: '60%',
            center: ['50%', '50%'],
            //ingresar los valores y etiquetas para cada lado
            
            data: [{ value: uno, name: 'Menor de 18 ' }, { value: dos, name: '18 - 30' },
            { value: tres, name: '31 - 49' },{ value: cuatro, name: '50 - 60' },
            { value: uno, name: 'Mayor a 60' }],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }]
    });
    $(window).on('resize', function () {
        setTimeout(function () {
            echartPie.resize();
        }, 500);
    });
}
//PARA GRAFICAS DE BARRA
var echartElemBar = document.getElementById('echartBarEdad');
if (echartElemBar) {
    var echartBar = echarts.init(echartElemBar);
    echartBar.setOption({
        legend: {
            borderRadius: 0,
            orient: 'horizontal',
            x: 'right',
            data: ['']//identificador externo para la barra
        },
        grid: {
            left: '8px',
            right: '8px',
            bottom: '0',
            containLabel: true
        },
        tooltip: {
            show: true,
            backgroundColor: 'rgba(0, 0, 0, .8)'
        },
        xAxis: [{
            type: 'category',
            data: ['Menor de 18','18 - 30','31 - 49','50 - 60','Mayor de 60'], //subtitulos para cada barra ['M', 'F']
            axisTick: {
                alignWithLabel: true
            },
            splitLine: {
                show: false
            },
            axisLine: {
                show: true
            }
        }],
        yAxis: [{
            type: 'value',
            axisLabel: {
                formatter: '{value}'
            },
            min: 0,
            max: maxedad,//valor maximo
            interval: cuantoedad,//intevalos que se desea la grafica.
            axisLine: {
                show: false
            },
            splitLine: {
                show: true,
                interval: 'auto'
            }
        }],

        series: [{
            name: 'Edad',
            data: [uno,dos,tres,cuatro,cinco],//ingreso de valores
            label: { show: false, color: '#0168c1' },
            type: 'bar',
            barGap: 0,
            color: '#bcbbdd',
            smooth: true,
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowOffsetY: -2,
                    shadowColor: 'rgba(0, 0, 0, 0.3)'
                }
            }
        }]
    });
    $(window).on('resize', function () {
        setTimeout(function () {
            echartBar.resize();
        }, 500);
    });
}
//---------------------------------------------------------------fin rango de edad

});
     </script>
@endsection

@section('bottom-js')
<script src="{{asset('assets/js/form.basic.script.js')}}"></script>
@endsection
