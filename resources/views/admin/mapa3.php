<!DOCTYPE HTML>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Highmaps Example</title>

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
}
</style>
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

    title: {
      text: 'Seguimiento Presupuesto Egresos de la Federación'
    },

    subtitle: {
      text: 'Programa de Construccion y Modernización'
    },

    mapNavigation: {
      enabled: true,
      buttonOptions: {
        verticalAlign: 'bottom'
      }
    },

        plotOptions:{
            series:{
                point:{
                    events:{
                        click: function(){
                        //llenar el selectBox con los r
                       
                        $('#info h2').html(this.name);
                        //alert(this.name);
                        $.get("resumen/"+this.name+"",function(consulta,commitment){
                            // $('#info h2').html(consulta[0].pef_2016_mdp);
                             $('#info .subheader').html('<small><em><h5>Programa de Construcción y Modernización</h5>                                                   <table><tr>PEF (MDP):     '+consulta[0].pef_2016_mdp+'</tr>          <tr> Autorizado Modificado: '+consulta[0].autorizado_modificado_mdp+'</tr>                                     <tr>Contratado a Mes Actual:     '+consulta[0].contratado_a_mes_mdp+'</tr>                                                                    <tr>   Contratado Total:  '+consulta[0].contratado_total_mdp+'</tr>  <tr>   Calendario Acumulado:  '+consulta[0].calendario_acumulado_mes_mdp + '</tr> </table>                   <h5>Programa de Derecho de Via</h5><p>PEF (MDP):'+consulta[1].pef_2016_mdp+' Autorizado Modificado: '+consulta[1].autorizado_modificado_mdp+'     Contratado a Mes Actual:  '+consulta[1].contratado_a_mes_mdp+' Contratado Total:  '+consulta[1].contratado_total_mdp+'     Calendario Acumulado:  '+consulta[1].calendario_acumulado_mes_mdp+'</p>                                   <h5>Programa de Estudios y Proyectos Carreteros</h5><p>PEF (MDP):'+consulta[2].pef_2016_mdp+' Autorizado Modificado: '+consulta[2].autorizado_modificado_mdp+'     Contratado a Mes Actual:  '+consulta[2].contratado_a_mes_mdp+' Contratado Total:  '+consulta[2].contratado_total_mdp+'     Calendario Acumulado:  '+consulta[2].calendario_acumulado_mes_mdp+'</p>        </em></small>                                                                           ');
                             // Obtener la referencia del elemento body
  var body = document.getElementsByTagName("body")[0];
 
  // Crea un elemento <table> y un elemento <tbody>
  var tabla   = document.createElement("table");
  var tblBody = document.createElement("tbody");

  // Crea las celdas
  for (var i = 0; i < 2; i++) {
    // Crea las hileras de la tabla
    var hilera = document.createElement("tr");
 
    for (var j = 0; j < 2; j++) {
      // Crea un elemento <td> y un nodo de texto, haz que el nodo de
      // texto sea el contenido de <td>, ubica el elemento <td> al final
      // de la hilera de la tabla
      var celda = document.createElement("td");
      var textoCelda = document.createTextNode("celda en la hilera "+i+", columna "+j);
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    }
 
    // agrega la hilera al final de la tabla (al final del elemento tblbody)
    tblBody.appendChild(hilera);
  }
 
  // posiciona el <tbody> debajo del elemento <table>
  tabla.appendChild(tblBody);
  // appends <table> into <body>
  body.appendChild(tabla);
  // modifica el atributo "border" de la tabla y lo fija a "2";
  tabla.setAttribute("border", "1");
                        });
                        }
                    }
                }
            }
        },

    colorAxis: {
      min: 0
    },

    series: [{
      data: data,
      mapData: Highcharts.maps['countries/mx/mx-all'],
      joinBy: 'hc-key',
      name: 'Número de proyectos',
      states: {
        hover: {
          color: '#BADA55'
        }
      },
      dataLabels: {
        enabled: true,
        format: '{point.name}'
      }
    }]
  });
});
  </script>
    </head>
    <body>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/mx/mx-all.js"></script>

    <div id="wrapper">
        <div id="container"></div>
        <div id="info">
            <span class="f32"><span id="flag"></span></span>
            <h2></h2>
            <div class="subheader">Click a un estado</div>
            <div id="country-chart"></div>
        </div>
    </div>
    </body>
</html>
