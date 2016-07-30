<!DOCTYPE HTML>
<html>

        <head>   
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
#contrata {
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
    
  <script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">

    $(function () { 

        var data_click = [<?php echo $contratado->contratado_a_mes_mdp; ?>];
        var data_viewer =[ <?php echo  $contratado->contratado_total_mdp; ?>];

        

    $('#contrata').highcharts({
        chart: {
            type: 'column'
        },

        title: {
            text: 'Contratado'
        },

        xAxis: {
            categories: ['Estado']

        },
        yAxis: {
            title: {
                text: 'MDP'
            }
        },

        series: [{
            name: 'Total',
            data: data_viewer
           
        }, {
            name: 'Mes Actual',
            data: data_click

        }],
        credits: {
          enabled: false
      }
      ,exporting: {
         enabled: false
}

    });

});

</script>
    </head>
    <body>

<div id="contrata" style="width: 150px; height: 260px; margin: 0 auto">
 
</div>

    </body>
</html>
