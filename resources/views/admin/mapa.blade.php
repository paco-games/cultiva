@extends('layouts.admin')
{!!Html::script('js/jquery-1.11.1.min.js')!!}
{!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js')!!}
{!!Html::script('https://code.highcharts.com/maps/highmaps.js')!!}
{!!Html::script('https://code.highcharts.com/maps/modules/exporting.js')!!}
{!!Html::script('https://code.highcharts.com/mapdata/countries/mx/mx-all.js')!!}
{!!Html::style('css/MapaMexico.css')!!}
@section('content')

        <script type="text/javascript">
        $(function() {
    var collection=<?php echo json_encode($collection);?>;
  // Prepare demo data
  var data = [{
    "hc-key": "mx-3622",
    "value":0
  }, {
    "hc-key": "mx-bc",
    "value": collection[1].Valor
  }, {
    "hc-key": "mx-bs",
    "value": collection[2].Valor
  }, {
    "hc-key": "mx-so",
    "value": collection[25].Valor
  }, {
    "hc-key": "mx-cl",
    "value": collection[5].Valor
  }, {
    "hc-key": "mx-na",
    "value": collection[17].Valor
  }, {
    "hc-key": "mx-cm",
    "value": collection[3].Valor
  }, {
    "hc-key": "mx-qr",
    "value": collection[22].Valor
  }, {
    "hc-key": "mx-mx",
    "value": collection[13].Valor
  }, {
    "hc-key": "mx-mo",
    "value": collection[15].Valor
  }, {
    "hc-key": "mx-df",
    "value": collection[13].Valor
  }, {
    "hc-key": "mx-qt",
    "value": collection[21].Valor
  }, {
    "hc-key": "mx-tb",
    "value": collection[26].Valor
  }, {
    "hc-key": "mx-cs",
    "value": collection[6].Valor
  }, {
    "hc-key": "mx-nl",
    "value": collection[18].Valor
  }, {
    "hc-key": "mx-si",
    "value": collection[24].Valor
  }, {
    "hc-key": "mx-ch",
    "value": collection[7].Valor
  }, {
    "hc-key": "mx-ve",
    "value": collection[29].Valor
  }, {
    "hc-key": "mx-za",
    "value": collection[31].Valor
  }, {
    "hc-key": "mx-ag",
    "value": collection[0].Valor
  }, {
    "hc-key": "mx-ja",
    "value": collection[12].Valor
  }, {
    "hc-key": "mx-mi",
    "value": collection[14].Valor
  }, {
    "hc-key": "mx-oa",
    "value": collection[19].Valor
  }, {
    "hc-key": "mx-pu",
    "value": collection[20].Valor
  }, {
    "hc-key": "mx-gr",
    "value": collection[10].Valor
  }, {
    "hc-key": "mx-tl",
    "value": collection[28].Valor
  }, {
    "hc-key": "mx-tm",
    "value": collection[27].Valor
  }, {
    "hc-key": "mx-co",
    "value": collection[4].Valor
  }, {
    "hc-key": "mx-yu",
    "value": collection[30].Valor
  }, {
    "hc-key": "mx-dg",
    "value": collection[8].Valor
  }, {
    "hc-key": "mx-gj",
    "value": collection[9].Valor
  }, {
    "hc-key": "mx-sl",
    "value": collection[23].Valor
  }, {
    "hc-key": "mx-hg",
    "value": collection[11].Valor
  }];

  // Initiate the chart
  $('#container').highcharts('Map', {  
   chart: { renderTo: 'histogram', defaultSeriesType: 'bar',
                         backgroundColor:'rgba(255, 255, 255, 0.1)'
                },

    colors: ['rgba(2, 144, 22, 0.6)', 'rgba(2, 137, 50, 0.9)', 'rgba(2, 120, 50, 0.9)',
                    'rgba(2, 100, 50, 0.9)'],

    title: {
      text: 'Seguimiento Presupuesto Egresos de la Federación'
    },

    subtitle: {
      text: 'Programa de Construccion y Modernización'
    },

    mapNavigation: {
      enabled: true,
      buttonOptions: {
        verticalAlign: 'left'
      }
    },

        plotOptions:{
            series:{
                point:{
                    events:{
                        click: function(){
                        //llenar el Info con informacion de la Obra
                       
                        $('#info h2').html('<center><h1>'+this.name+'</h1></center>'+'<h3 >Numero de Obras:  '+this.value+'</h3>');

                        $('#info .subheader3').html('<h3><a href="Graficas/Reporte/'+this.name+'"" ><p id="p1">Ver mas </p></h3></a>');
                        //alert(this.name);
                        $.get("resumen/"+this.name+"",function(consulta,estado){
                            // $('#info h2').html(consulta[0].pef_2016_mdp);

                            $('#info .subheader').html('<br><h3><p id="p2">Programa de Construcción y Modernización</p></h3>');
                               $("#myTable").find("tr:not(:first)").remove();                           
                              var table = document.getElementById("myTable");    
                                   
                              var row = table.insertRow(1);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);
                              cell1.innerHTML="<td><h5>Asignacion PEF 2016 (MDP)</h5></td>";
                             cell2.innerHTML="<td><h5>$"+consulta[0].pef_2016_mdp+"</h5></td>";

                              var row = table.insertRow(2);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);
                              cell1.innerHTML="<td><h5>Asignacion Modificado (MDP)</h5> </td>";
                             cell2.innerHTML="<td><h5>$"+consulta[0].autorizado_modificado_mdp+"</h5></td>";

                              var row = table.insertRow(3);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);                              
                              cell1.innerHTML="<td><h5>Contratado al mes (MDP)</h5></td>";
                             cell2.innerHTML="<td><h5>$"+consulta[0].contratado_a_mes_mdp+"</h5></td>";;

                              var row = table.insertRow(4);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);                              
                              cell1.innerHTML="<td><h5>Contratado contratado_total_mdp(MDP)</h5></td>";
                             cell2.innerHTML="<td><h5>$"+consulta[0].contratado_total_mdp+"</h5></td>";

                              var row = table.insertRow(5);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);                              
                              cell1.innerHTML="<td><h5>Calendario al mes (MDP)</h5></td>";
                             cell2.innerHTML="<td><h5>$"+consulta[0].calendario_acumulado_mes_mdp +"</h5></td>";
                              var row = table.insertRow(6);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);                              
                              cell1.innerHTML="<td><h5>Calendario Trimestre Actual (MDP)</h5></td>";
                             cell2.innerHTML="<td><h5>$"+consulta[0].calendario_al_tercer_trimestre_mdp +"</h5></td>";

                               $("#myTable2").find("tr:not(:first)").remove(); 
                            $('#info .subheader2').html('<h3><p id="p3">Programa de Derecho de Via</p></h3>'
                              );
                              var table = document.getElementById("myTable2");   var row = table.insertRow(1);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);
                              cell1.innerHTML="<td><h5>Asignacion PEF 2016 (MDP)</h5></td>";
                             cell2.innerHTML="<td><h5>$"+consulta[1].pef_2016_mdp+"</h5></td>";

                              var row = table.insertRow(2);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);
                              cell1.innerHTML="<td><h5>Asignacion Modificado (MDP)</h5> </td>";
                             cell2.innerHTML="<td><h5>$"+consulta[1].autorizado_modificado_mdp+"</h5></td>";

                              var row = table.insertRow(3);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);                              
                              cell1.innerHTML="<td><h5>Contratado al mes (MDP)</h5></td>";
                             cell2.innerHTML="<td><h5>$"+consulta[1].contratado_a_mes_mdp+"</h5></td>";;

                              var row = table.insertRow(4);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);                              
                              cell1.innerHTML="<td><h5>Contratado contratado_total_mdp(MDP)</h5></td>";
                             cell2.innerHTML="<td><h5>$"+consulta[1].contratado_total_mdp+"</h5></td>";

                              var row = table.insertRow(5);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);                              
                              cell1.innerHTML="<td><h5>Calendario al mes (MDP)</h5></td>";
                             cell2.innerHTML="<td><h5>$"+consulta[1].calendario_acumulado_mes_mdp +"</h5></td>";
                              var row = table.insertRow(6);
                              var cell1 = row.insertCell(0);
                              var cell2 = row.insertCell(1);                              
                              cell1.innerHTML="<td><h5>Calendario Trimestre Actual (MDP)</h5></td>";
                             cell2.innerHTML="<td><h5>$"+consulta[1].calendario_al_tercer_trimestre_mdp +"</h5></td>";

                           
                             });
                        }

                    }
                }
            }
        },
         legend: {
                    title: {
                        text: 'Proyectos por Estado'
                    },
                    align: 'left',
                    verticalAlign: 'bottom',
                    floating: true,
                    layout: 'vertical',
                    valueDecimals: 0,
                    backgroundColor: 'rgba(255,255,255,0.1)',
                    symbolRadius: 0,
                    symbolHeight: 14
                },
        colorAxis: {
                    dataClassColor: 'category',
                    dataClasses: [{
                        to: 3
                    }, {
                        from: 3,
                        to: 5
                    }, {
                        from: 5,
                        to: 10
                    },{
                        from: 10
                    }]
                },

    series: [{
      data: data,
      mapData: Highcharts.maps['countries/mx/mx-all'],
      joinBy: 'hc-key',
      name: 'Número de proyectos',
      states: {
        hover: {
          color: '#c8e6c9'
        }
      },
      dataLabels: {
        enabled: true,
        format: '{point.name}'
      }
    }],
        credits: {
          enabled: false
      }
  });
});
  </script>
  

    @include('alerts.errors')
    <section>
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{!!URL::to('admin')!!}">Home</a></li>
        <li class="active">Resumen</li>
      </ol>
    </div>
    @include('alerts.success')
    <div class="row">
      <div class="col-md-12">
        <div class="card card-bordered style-success">
        <div class="card-head">
          <header><i class="md md-location-city"></i> Presupesto de Egresos de la Federación</header>
            <div class="tools">
              
            </div>
        </div>
       
       </div>
        <div>
              <div id="wrapper">
                    <div id="container"></div>
                    <div id="info">
                        <h2></h2>
                        <div class="subheader">Click a un estado</div>
                        <table id="myTable" class="table table-striped table-bordered table-hover" >
                         <thead>
                              <th colspan="2" style="display:none;"></th>
                             
                            </thead>
                        </table>
                        <br>
                        <div class="subheader2"></div>
                        <table id="myTable2" class="table table-striped table-bordered table-hover" >
                         <thead>
                              <th colspan="2" style="display:none;"></th>
                              
                            </thead>
                        </table>
                         <div class="subheader3"></div>                     
                    </div>
                </div>
        </div>
      </div>
    </div>
  </section>
    @endsection





