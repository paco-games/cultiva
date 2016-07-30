<!DOCTYPE HTML>
<html>
    <head>   
    <style type="text/css">
        * {
            font-family: sans-serif;
        }
        #container {
            float: left;
            height: 500px; 
            width: 700px; 
            margin: 0;
        }
    </style>
        
<script type="text/javascript">
    $(function () {
        $('#container').highcharts({

   colors: ["#2b908f", "#90ee7e"],
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

<div id="container" style="width: 200px; height: 290px; margin: 0 auto">
     
</div>    
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
                    <td >{{substr($asignaciones->estado, 0,7).'..'}}</td>
                    <td >{{$asignaciones->pef_2016_mdp}}</td>
                    <td >{{$asignaciones->autorizado_modificado_mdp}}</td>
                                      
                </tr>
            </tbody>
        </table>

    </div><!--end .table-responsive -->
</div><!--end .col -->

    </body>
</html>
