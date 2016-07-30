
<script language="JavaScript" type="text/javascript">
<!--
var baseUrl = '{!! url() !!}';
</script>
<br>
<!-- Datos del Contrato al que se carga los documentos -->
<div class="col-md-12 form-group">
  <div class="col-md-9 form-group">
    <div class="col-md-6 form-group">
      {!!Form::label('tipo','Descripción de la semilla:')!!}<br>
      {!! Form::text('description','',['id' => 'description', 'class'=>'form-control']) !!}
    </div>
    <div class="col-md-6 ">
     {!!Form::label('Periodo','Temporada apta para siembra:')!!}
     <br>
     {!!Form::select('period', array('Primavera-Verano' => 'Primavera - Verano', 'Otoño-Invierno' => 'Otoño - Invierno', 'Todo el Año' => 'Todo el año'), null, ['id' => 'period','required' => '','style'=>'width:80%', 'class'=>'form-control']);!!}
 
     <br>
    </div>
    <div class="col-md-6 form-group">
     {!!Form::label('time','Tiempo Cultivo:')!!}
     {!!Form::select('timeProduction', array('1' => '1 mes', '2' => '2 meses','3' => '3 meses','4' => '4 meses','5' => '5 meses','6' => '6 meses','7' => '7 meses','8' => '8 meses','9' => '9 meses','10' => '10 meses','11' => '11 meses','12' => '12 meses','13' => '13 meses','14' => '14 meses','15' => '15 meses','16' => '16 meses','17' => '17 meses','18' => '18 meses','19' => '19 meses','20' => '20 meses','21' => '21 meses','22' => '22 meses'), null, ['id' => 'timeProduction','required' => '','style'=>'width:80%', 'class'=>'form-control']);!!}
     </div>
    <div class="col-md-6 form-group">
      {!!Form::label('estimatedEfficiency','Rendimiento Estimado')!!}<br>
      {!! Form::text('estimatedEfficiency','',['id' => 'estimatedEfficiency', 'class'=>'form-control']) !!}
    </div>
      <div class="col-md-6 form-group">
     {!!Form::label('groundType','Tipo Tierra :')!!}
     {!!Form::select('groundType', array('Arenoso' => 'Suelo arenoso', 'Calizo' => 'Suelo Calizo','Arcilloso' => 'Suelo Arcilloso','Pedregoso' => 'Suelo Pedregoso','Mixto' => 'Suelo Mixto'), null, ['id' => 'groundType','required' => '','style'=>'width:80%', 'class'=>'form-control']);!!}
     </div>

      <div class="col-md-6 form-group">
     {!!Form::label('weatherType','Tipo Tierra :')!!}
     {!!Form::select('weatherType', array('Tropical' => 'Clima Tropical', 'Templado' => 'Clima Templado','Frio' => 'Clima Frio'), null, ['id' => 'weatherType','required' => '','style'=>'width:80%', 'class'=>'form-control']);!!}
     </div>

     
  </div>
  <div class="col-md-3">
    <div class="row">
      <div class="col-lg-offset-1">
        <div class="card">
          <div class="card-head style-primary">
            <header>Cargar Imagen </header>
          </div>
          <div class="card-body no-padding">
            <div class="dz-message">
              <h5>Arrastra tus archivos o click aqui para subir.</h5>
            </div>
          </div><!--end .card-body -->
        </div><!--end .card -->
      </div><!--end .col -->
    </div><!--end .row -->
    <!-- END FILE UPLOAD -->
  </div>
</div>
