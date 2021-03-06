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

    <!-- BEGIN STYLESHEETS -->
    {!! Html::style('http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900')!!}
    {!! Html::style('assets/css/theme-default/bootstrap.css?1422792965')!!}
    {!! Html::style('assets/css/theme-default/materialadmin.css?1425466319')!!}
    {!! Html::style('assets/css/theme-default/font-awesome.min.css?1422529194')!!}
    {!! Html::style('assets/css/theme-default/material-design-iconic-font.min.css?1421434286')!!}
    {!! Html::style('assets/css/theme-default/libs/rickshaw/rickshaw.css?1422792967')!!}
    {!! Html::style('assets/css/theme-default/libs/morris/morris.core.css?1420463396')!!}
    {!! Html::style('assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989')!!}
    {!! Html::style('assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990')!!}
    {!! Html::style('assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990')!!}

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
* {
    font-family: sans-serif;
}
#wrapper {
    height: 500px;
    width: 1000px;
    margin: 0 auto;
    padding: 0;
}
#container {
    float: left;
    height: 500px; 
    width: 700px; 
    margin: 0;
}
#info {
    float: left;
    width: 270px;
    padding-left: 20px;
    margin: 100px 0 0 0;
    border-left: 1px solid silver;
}
#info h2 {
    display: inline;
    font-size: 13pt;
}
#info .f32 .flag {
    vertical-align: bottom !important;
}

#info h4 {
    margin: 1em 0 0 0;
}
        </style>
        
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        colors: ["#2b908f", "#7798BF" , "#B45F04", "#6E6E6E"],
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Programa de Construcción y Modernización de Carreteras',
            x: -20 //center
        },
        subtitle: {
            text: 'Dirección General Adjunta de Construcción y Modernización',
            x: -20
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'MDP'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' MDP ' + this.point.name.toLowerCase();
            }
        }
    });
});
        </script>
    </head>
    <body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 1070px; height: 480px; margin: 0 auto"></div>
<div clas="" style="display:none;">
    
<div class="col-lg-12">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-hover" data-swftools="assets/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">

                                <thead>
                                    <tr>
                                        <th class="sort-alpha">Estado</th>
                                        <th class="sort-numeric">Autorizado Modificado</th>
                                        <th class="sort-numeric">Calendario Acumulado al Mes</th>
                                        <th class="sort-numeric">Total Ejercido</th>
                                        <th class="sort-numeric">Saldo (Calendario vs Ejercido)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($generalcortemes as $dato)
                                    <tr class="gradeX">
                                    
                                      <td >{{$dato->estado}}</td>
                                      <td >{{$dato->autorizado_modificado_mdp}}</td>
                                      <td >{{$dato->calendario_acumulado_mes_mdp}}</td>
                                      <td >{{$dato->total}}</td>
                                      <td >{{$dato->saldo_calendario_vs_ejercido}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!--end .table-responsive -->
                    </div><!--end .col -->

  </div>
 </body>
</html>
