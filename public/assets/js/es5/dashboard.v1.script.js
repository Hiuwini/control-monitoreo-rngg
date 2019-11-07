//PARA GRAFICAR

'use strict';

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };
var cantF,cantM,maxGenero,deCuanto,uno,dos,tres,cuatro,cinco,maxedad,cuantoedad;
//-------------------------------------------variables para genero
cantF=4896;
cantM=475;
maxGenero=cantM+cantF;
deCuanto=maxGenero/4;
//------------------------------------------variables para rango de edad
uno=15;
dos=24;
tres=42;
cuatro=33;
cinco=27;
maxedad=uno+dos+tres+cuatro+cinco;
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
            name: 'Genero',//descripción flotante de los valores
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
            data: ['Masculino','Femenino','Total'], //subtitulos para cada barra ['M', 'F']
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
            name: 'Genero',
            data: [cantM,cantF,maxGenero],//ingreso de valores
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
            data: ['Menor de 18','18 - 30','31 - 49','50 - 60','Mayor de 60','Total'], //subtitulos para cada barra ['M', 'F']
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
            data: [uno,dos,tres,cuatro,cinco,maxedad],//ingreso de valores
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


    // Chart in Dashboard version 1
    var echartElemBar = document.getElementById('echartBar');
    if (echartElemBar) {
        var echartBar = echarts.init(echartElemBar);
        echartBar.setOption({
            legend: {
                borderRadius: 0,
                orient: 'horizontal',
                x: 'right',
                data: ['Online', 'Offline']
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
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
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
                    formatter: '${value}'
                },
                min: 0,
                max: 100000,
                interval: 25000,
                axisLine: {
                    show: false
                },
                splitLine: {
                    show: true,
                    interval: 'auto'
                }
            }],

            series: [{
                name: 'Online',
                data: [35000, 69000, 22500, 60000, 50000, 50000, 30000, 80000, 70000, 60000, 20000, 30005],
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
            }, {
                name: 'Offline',
                data: [45000, 82000, 35000, 93000, 71000, 89000, 49000, 91000, 80200, 86000, 35000, 40050],
                label: { show: false, color: '#639' },
                type: 'bar',
                color: '#7569b3',
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
 
    // Chart in Dashboard version 1
    var echartElemPie = document.getElementById('echartPie');
    if (echartElemPie) {
        var echartPie = echarts.init(echartElemPie);
        echartPie.setOption({
            color: ['#62549c', '#7566b5', '#7d6cbb', '#8877bd', '#9181bd', '#6957af'],
            tooltip: {
                show: true,
                backgroundColor: 'rgba(0, 0, 0, .8)'
            },

            series: [{
                name: 'Sales by Country',
                type: 'pie',
                radius: '60%',
                center: ['50%', '50%'],
                data: [{ value: 535, name: '' }, { value: 310, name: 'Brazil' }, { value: 234, name: 'France' }, { value: 155, name: 'BD' }, { value: 130, name: 'UK' }, { value: 348, name: 'India' }],
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

    
    // Chart in Dashboard version 1
    var echartElem1 = document.getElementById('echart1');
    if (echartElem1) {
        var echart1 = echarts.init(echartElem1);
        echart1.setOption(_extends({}, echartOptions.lineFullWidth, {
            series: [_extends({
                data: [30, 40, 20, 50, 40, 80, 90]
            }, echartOptions.smoothLine, {
                markArea: {
                    label: {
                        show: true
                    }
                },
                areaStyle: {
                    color: 'rgba(102, 51, 153, .2)',
                    origin: 'start'
                },
                lineStyle: {
                    color: '#663399'
                },
                itemStyle: {
                    color: '#663399'
                }
            })]
        }));
        $(window).on('resize', function () {
            setTimeout(function () {
                echart1.resize();
            }, 500);
        });
    }
    // Chart in Dashboard version 1
    var echartElem2 = document.getElementById('echart2');
    if (echartElem2) {
        var echart2 = echarts.init(echartElem2);
        echart2.setOption(_extends({}, echartOptions.lineFullWidth, {
            series: [_extends({
                data: [30, 10, 40, 10, 40, 20, 90]
            }, echartOptions.smoothLine, {
                markArea: {
                    label: {
                        show: true
                    }
                },
                areaStyle: {
                    color: 'rgba(255, 193, 7, 0.2)',
                    origin: 'start'
                },
                lineStyle: {
                    color: '#FFC107'
                },
                itemStyle: {
                    color: '#FFC107'
                }
            })]
        }));
        $(window).on('resize', function () {
            setTimeout(function () {
                echart2.resize();
            }, 500);
        });
    }
    // Chart in Dashboard version 1
    var echartElem3 = document.getElementById('echart3');
    if (echartElem3) {
        var echart3 = echarts.init(echartElem3);
        echart3.setOption(_extends({}, echartOptions.lineNoAxis, {
            series: [{
                data: [40, 80, 20, 90, 30, 80, 40, 90, 20, 80, 30, 45, 50, 110, 90, 145, 120, 135, 120, 140],
                lineStyle: _extends({
                    color: 'rgba(102, 51, 153, 0.8)',
                    width: 3
                }, echartOptions.lineShadow),
                label: { show: true, color: '#212121' },
                type: 'line',
                smooth: true,
                itemStyle: {
                    borderColor: 'rgba(102, 51, 153, 1)'
                }
            }]
        }));
        $(window).on('resize', function () {
            setTimeout(function () {
                echart3.resize();
            }, 500);
        });
    }
});