@extends('layouts.admin')
 <?php use Carbon\Carbon;;?>
	@section('content')
		{!!Html::script('js/jquery-1.11.1.min.js')!!}
	  	{!! Html::script('js/jquery.popup.js')!!}
	  	{!! Html::style('css/popup.css')!!}
	@include('alerts.errors')
	<section>
  <div class="card car-bordered">
    <div class="col-md-12 ">
    <div class="col-md-1"></div>
    <div class="=col-md11">
     <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{!!URL::to('admin')!!}">Home</a></li>
        <li class="active">Datos</li>
      </ol>
    </div>
    </div>
      @include('alerts.success')
    <div class="row">
      <div class="card card-bordered style-accent">
       
          <header>
          <div class="col-md-12 ">
          <div class="col-md-10 "><h4>Seguimiento a los terrenos de siembra</h4></div>
          <div class="col-md-2 ">
          </div>
          </div>
          </header>
       
       </div>
        <div id="table" class="table-editable">
                    <div class="forms">
                      <div class="form-body">
                        <!--aqui va la tabla-->
                        <table id="table1" class="table table-striped table-bordered table-hover table-condensed">
                          
                          <tbody>
                             @foreach($terrenos as $terreno)
                            <tr>
                            <div class="col-lg-12 col-sm-6">
                              <div class="card">
                                <div class="card-head card-head-sm style-accent">
                                  <header>{{$terreno->description}}</header>
                                </div><!--end .card-head -->
                                <?php
                                $duracionPeriodo=$terreno->gestation/3;
                                $now = Carbon::now();
                                $end_date = Carbon::parse($terreno->dateInit);
                                $duracionActual = $end_date->diffInDays($now);

                                ?>
                                <div class="card-body">
                                <div class="row">
                                  <div class="col-md-8  rowspan="6""> 
                                  @if($duracionActual<=$duracionPeriodo)
                                  <center><img src="Fases/Fase1{{$terreno->pathperfil}}" alt="" style=" width: 280px"></center>
                                  @elseif($duracionActual<=($duracionPeriodo*2))
                                   <center> <img src="Fases/Fase2{{$terreno->pathperfil}}" alt="" style=" width: 280px"></center>
                                  @elseif($duracionActual<=($duracionPeriodo*3))
                                   <center> <img src="Fases/Fase1{{$terreno->pathperfil}}" alt="" style=" width: 280px"></center>
                                  @else 
                                  <center> <img src="/assets/img/avatar1.jpg" alt="" style=" width: 280px" /></center>
                                  @endif

                                 
                                  </div>
                                  <div class="col-md-4">
                                  {!!Form::label('status','Dias desde que se sembro:  '.$duracionActual.' dias')!!}
                                  </div>
                                   <div class="col-md-4">
                                    @if($duracionActual<=$duracionPeriodo)
                                      {!!Form::label('status',' Primer Fase de Gestación')!!}
                                    @elseif($duracionActual<=($duracionPeriodo*2))
                                      {!!Form::label('status', 'Segunda Fase Gestación')!!}
                                    @elseif($duracionActual<=($duracionPeriodo*3)) {!!Form::label('status', 'Tercer Fase de Gestación')!!}
                                    @endif
                                  
                                   </div>
                                  <div class="col-md-4">{!!Form::label('status','Tiempo Total de Gestación  '.$terreno->gestation.' dias')!!}
                                  </div>

                                  <div class="col-md-4">{!!Form::label('status','Dias para la cosecha '.($terreno->gestation-$duracionActual).' dias')!!}</div>
                                  </div>                               
                                </div>
                               
                                </div><!--end .card-body -->
                              </div><!--end .card -->
                            </div><!--end .col -->
                              
                            </tr>
                            @endforeach
                            
                          </tbody>
                        </table>
                      </div>
                      {!!Html::script('js/jquery.dataTables.js')!!}
                      
                      <script type="text/javascript">
                      $(document).ready(function(){
                        $('#table1').DataTable();
                      });
                      </script>
                    </div>
                  </div>
                  
  </div>
</div>
	
	@endsection
