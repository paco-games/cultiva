<!DOCTYPE HTML>
<html>
    <head>   
    <style type="text/css">
        * {
            font-family: sans-serif;
        }
        
        #calenda {
            float: left;
            height: 500px; 
            width: 700px; 
            margin: 0;
        }
    </style>
                
        <script type="text/javascript">
        $(function () {
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
        });
        </script>
    </head>
    <body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

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
                    <td >{{substr($analisis->estado, 0,7).'..'}}</td>
                    <td >{{$analisis->autorizado_modificado_mdp}}</td>
                    <td>{{$analisis->contratado_a_mes_mdp}}</td>
                    <td >{{$analisis->calendario_acumulado_mes_mdp}}</td>
                    <td >{{$analisis->total}}</td>
                                      
                </tr>
            </tbody>
        </table>
    </div><!--end .table-responsive -->
</div><!--end .col -->

    </body>
</html>
