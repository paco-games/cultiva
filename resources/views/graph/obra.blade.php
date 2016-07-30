<!DOCTYPE HTML>
<html>
    <head>
    <title>Dirección General de Carreteras</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    {!! Html::style('assets/css/theme-default/bootstrap.css')!!}
    {!! Html::style('assets/css/theme-default/materialadmin.css')!!}
    {!! Html::style('assets/css/theme-default/font-awesome.min.css')!!}
    {!! Html::style('assets/css/theme-default/material-design-iconic-font.min.css')!!}

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<style type="text/css">
        * {
            font-family: sans-serif;
        }
         #ejecuta {
            float: left;
            height: 200px; 
            width: 290px; 
            margin: 0;
        }
        #container {
            float: left;
            height: 200px; 
            width: 290px; 
            margin: 0;
        }
        #contrata {
            float: left;
            height: 200px; 
            width: 290px; 
            margin: 0;
        }
         #calenda {
            float: left;
            height: 200px; 
            width: 290px; 
            margin: 0;
        }
    </style>
        
<script type="text/javascript">
    $(function () {

            $('#ejecuta').highcharts({

                colors: ["#B45F04", "#6E6E6E"],
                data: {
                    table: 'ejecutado'
                },
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Saldo'
                },
                yAxis: {
                    allowDecimals: false,
                    title: {
                        text: 'MDP'
                    }
                },
                tooltip: {
                    formatter: function () {
                        return '<b>' + this.series.name + '</b><br/>' +
                            this.point.y + ' ' + this.point.name.toLowerCase();
                    }
                },
                credits: {
                  enabled: false
              },exporting: {
                 enabled: false
        }
            });
        $('#calenda').highcharts({

           colors: ["#2b908f", "#7798BF" , "#B45F04", "#6E6E6E"],
                data: {
                    table: 'calendario'
                },
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Corte al mes'
                },
                yAxis: {
                    allowDecimals: false,
                    title: {
                        text: 'MDP'
                    }
                },
                tooltip: {
                    formatter: function () {
                        return '<b>' + this.series.name + '</b><br/>' +
                            this.point.y + ' ' + this.point.name.toLowerCase();
                    }
                },
                credits: {
                  enabled: false
              },exporting: {
                 enabled: false
        }
            });
         $('#contrata').highcharts({

           colors: ["#f45b5b", "#7798BF"],
            data: {
                table: 'contratado'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'Contratado'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'MDP'
                }
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        this.point.y + ' ' + this.point.name.toLowerCase();
                }
            },
            credits: {
              enabled: false
          },exporting: {
             enabled: false
    }
        });
        $('#container').highcharts({                
            colors: ["#B45F04", "#6E6E6E"],
            data: {
                table: 'datatable'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'Asignaciones'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'MDP'
                }
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        this.point.y + ' ' + this.point.name.toLowerCase();
                }
            },
            credits: {
              enabled: false
          },exporting: {
             enabled: false
    }
        });
    });
</script>
    </head>
    <body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div class="card">
            <div class="card-head">
                <center><header>SEGUIMIENTO PRESUPUESTO DE EGRESOS DE LA FEDERACION 2016</header></center>
            </div>

                 <div class="col-md-12">
                    <div class="col-md-3">
                    
                        <div id="container" style="width: 200px; height: 290px; margin: 0 auto"></div> 
                        <div class="col-lg-12" style="display:none">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-hover" data-swftools="assets/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">
                                <thead>
                                    <tr>
                                    <th class="sort-alpha">Estado</th>
                                    <th class="sort-numeric">PEF 2016</th>
                                    <th class="sort-numeric">Autorizado Modificado </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                    <td >{{'Obra '.substr($asignaciones->registro_shcp, 0,7).'..'}}</td>
                                    <td >{{$asignaciones->pef_2016_mdp}}</td>
                                    <td >{{$asignaciones->autorizado_modificado_mdp}}</td>
                                    </tr>
                                </tbody>
                                </table>

                            </div><!--end .table-responsive -->
                        </div><!--end .col -->
                    </div>
                    <div class="col-md-3">
                        <div id="contrata" style="width: 200px; height: 290px; margin: 0 auto"></div>    
                        <div class="col-lg-12" style="display:none">
                            <div class="table-responsive">
                                <table id="contratado" class="table table-striped table-hover" data-swftools="assets/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">
                                    <thead> 
                                    <tr>
                                    <th class="sort-alpha">Estado</th>
                                    <th class="sort-numeric">Contratado Total</th>
                                    <th class="sort-numeric">Contratado a Julio</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="gradeX">
                                    <td >{{'Obra '.substr($contratado->registro_shcp, 0,7).'..'}}</td>
                                    <td >{{$contratado->contratado_total_mdp}}</td>
                                    <td >{{$contratado->contratado_a_mes_mdp}}</td>
                                      
                                    </tr>
                                </tbody>
                                </table>

                            </div><!--end .table-responsive -->
                        </div><!--end .col -->
                    </div>
                    <div class="col-md-3">
                        <div id="calenda" style="width: 200px; height: 290px; margin: 0 auto"></div>
    
                            <div class="col-lg-12" style="display:none">
                                <div class="table-responsive">
                                    <table id="calendario" class="table table-striped table-hover" data-swftools="assets/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">
                                        <thead>
                                            <tr>
                                                <th class="sort-alpha">Estado</th>
                                                <th class="sort-numeric"> PEF Autorizado Modificado</th>
                                                <th class="sort-numeric">Contratado al mes</th>
                                                <th class="sort-numeric">Calendario al mes</th>
                                                <th class="sort-numeric">Ejercido al mes</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                            <tr class="gradeX">
                                                <td >{{'Obra '.substr($analisis->registro_shcp, 0,7).'..'}}</td>
                                                <td >{{$analisis->autorizado_modificado_mdp}}</td>
                                                <td>{{$analisis->contratado_a_mes_mdp}}</td>
                                                <td >{{$analisis->calendario_acumulado_mes_mdp}}</td>
                                                <td >{{$analisis->total}}</td>
                                      
                                            </tr>
                                    </tbody>
                                    </table>
                                </div><!--end .table-responsive -->
                            </div><!--end .col -->
                    </div>
                    <div class="col-md-3">
                        <div id="ejecuta" style="width: 200px; height: 290px; margin: 0 auto"></div>
    
                            <div class="col-lg-12" style="display:none">
                                <div class="table-responsive">
                                    <table id="ejecutado" class="table table-striped table-hover" data-swftools="assets/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">
                                        <thead>
                                            <tr>
                                                <th class="sort-alpha">Estado</th>
                                                <th class="sort-numeric">Calendario al mes</th>
                                                <th class="sort-numeric">Ejercido al mes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr class="gradeX">
                                                    <td >{{'Obra '.substr($saldo->registro_shcp, 0,7).'..'}}</td>
                                                    <td >{{$saldo->calendario_acumulado_mes_mdp}}</td>
                                                    <td >{{$saldo->total}}</td>                                            
                                                </tr>
                                        </tbody>
                                    </table>
                                </div><!--end .table-responsive -->
                            </div><!--end .col -->
                    </div>
                 </div>
                    
        
</div>

    </body>
</html>
