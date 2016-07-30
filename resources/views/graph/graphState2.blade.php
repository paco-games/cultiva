<!DOCTYPE HTML>
<html>
    <head>   
    <style type="text/css">
        * {
            font-family: sans-serif;
        }
       
        #contrata {
            float: left;
            height: 500px; 
            width: 700px; 
            margin: 0;
        }
       
    </style>
        
<script type="text/javascript">
    $(function () {
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
    });
</script>
    </head>
    <body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="contrata" style="width: 200px; height: 290px; margin: 0 auto">
     
</div>    
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
                    <td >{{substr($asignaciones->estado, 0,7).'..'}}</td>
                    <td >{{$contratado->contratado_total_mdp}}</td>
                    <td >{{$contratado->contratado_a_mes_mdp}}</td>
                                      
                </tr>
            </tbody>
        </table>

    </div><!--end .table-responsive -->
</div><!--end .col -->

    </body>
</html>
