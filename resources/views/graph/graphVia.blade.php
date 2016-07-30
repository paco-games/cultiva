<!DOCTYPE HTML>
<html>
    <head>
<style type="text/css">
        * {
            font-family: sans-serif;
        }
         #ejecuta1 {
            float: left;
            height: 500px; 
            width: 700px; 
            margin: 0;
        }
        #container1 {
            float: left;
            height: 500px; 
            width: 700px; 
            margin: 0;
        }
        #contrata1 {
            float: left;
            height: 500px; 
            width: 700px; 
            margin: 0;
        }
         #calenda1 {
            float: left;
            height: 500px; 
            width: 700px; 
            margin: 0;
        }
    </style>
        
<script type="text/javascript">
    $(function () {

            $('#ejecuta1').highcharts({
                
                colors: ["#B45F04", "#6E6E6E"],
                data: {
                    table: 'ejecutado1'
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
        $('#calenda1').highcharts({

           colors: ["#2b908f", "#7798BF" , "#B45F04", "#6E6E6E"],
                data: {
                    table: 'calendario1'
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
         $('#contrata1').highcharts({
            colors: ["#f45b5b", "#7798BF"],
            data: {
                table: 'contratado1'
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
        $('#container1').highcharts({           

   colors: ["#2b908f", "#90ee7e"],
            data: {
                table: 'datatable1'
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
       <div class=row>
                 <div class="col-md-12">
                    <div class="col-md-3">
                        <div id="container1" style="width: 200px; height: 290px; margin: 0 auto"></div> 
                        <div class="col-lg-12" style="display:none">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-striped table-hover" data-swftools="assets/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">
                                <thead>
                                    <tr>
                                    <th class="sort-alpha">Estado</th>
                                    <th class="sort-numeric">PEF 2016</th>
                                    <th class="sort-numeric">Autorizado Modificado </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                    <td >{{substr($asignaciones1->estado, 0,7).'..'}}</td>
                                    <td >{{$asignaciones1->pef_2016_mdp}}</td>
                                    <td >{{$asignaciones1->autorizado_modificado_mdp}}</td>
                                    </tr>
                                </tbody>
                                </table>

                            </div><!--end .table-responsive -->
                        </div><!--end .col -->
                    </div>
                    <div class="col-md-3">
                        <div id="contrata1" style="width: 200px; height: 290px; margin: 0 auto"></div>    
                        <div class="col-lg-12" style="display:none">
                            <div class="table-responsive">
                                <table id="contratado1" class="table table-striped table-hover" data-swftools="assets/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">
                                    <thead> 
                                    <tr>
                                    <th class="sort-alpha">Estado</th>
                                    <th class="sort-numeric">Contratado Total</th>
                                    <th class="sort-numeric">Contratado a Julio</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="gradeX">
                                    <td >{{substr($contratado1->estado, 0,7).'..'}}</td>
                                    <td >{{$contratado1->contratado_total_mdp}}</td>
                                    <td >{{$contratado1->contratado_a_mes_mdp}}</td>
                                      
                                    </tr>
                                </tbody>
                                </table>

                            </div><!--end .table-responsive -->
                        </div><!--end .col -->
                    </div>
                    <div class="col-md-3">
                        <div id="calenda1" style="width: 200px; height: 290px; margin: 0 auto"></div>
    
                            <div class="col-lg-12" style="display:none">
                                <div class="table-responsive">
                                    <table id="calendario1" class="table table-striped table-hover" data-swftools="assets/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">
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
                                                <td >{{substr($analisis1->estado, 0,7).'..'}}</td>
                                                <td >{{$analisis1->autorizado_modificado_mdp}}</td>
                                                <td>{{$analisis1->contratado_a_mes_mdp}}</td>
                                                <td >{{$analisis1->calendario_acumulado_mes_mdp}}</td>
                                                <td >{{$analisis1->total}}</td>
                                      
                                            </tr>
                                    </tbody>
                                    </table>
                                </div><!--end .table-responsive -->
                            </div><!--end .col -->
                    </div>
                    <div class="col-md-3">
                        <div id="ejecuta1" style="width: 200px; height: 290px; margin: 0 auto"></div>
    
                            <div class="col-lg-12" style="display:none">
                                <div class="table-responsive">
                                    <table id="ejecutado1" class="table table-striped table-hover" data-swftools="assets/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">
                                        <thead>
                                            <tr>
                                                <th class="sort-alpha">Estado</th>
                                                <th class="sort-numeric">Calendario al mes</th>
                                                <th class="sort-numeric">Ejercido al mes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr class="gradeX">
                                                    <td >{{substr($saldo1->estado, 0,7).'..'}}</td>
                                                    <td >{{$saldo1->calendario_acumulado_mes_mdp}}</td>
                                                    <td >{{$saldo1->total}}</td>                                            
                                                </tr>
                                        </tbody>
                                    </table>
                                </div><!--end .table-responsive -->
                            </div><!--end .col -->
                    </div>
                 </div>
                    
                </div>
    </div>

    </body>
</html>
