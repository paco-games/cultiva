@extends('layouts.admin')

	@section('content')
		{!!Html::script('js/jquery-1.11.1.min.js')!!}
	  	{!! Html::script('js/jquery.popup.js')!!}
	  	{!! Html::style('css/popup.css')!!}
	@include('alerts.errors')
	<section>
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{!!URL::to('admin')!!}">Home</a></li>
        <li class="active">Datos</li>
      </ol>
    </div>
    
    @include('alerts.success')
    <div class="row">
    	<div class="col-md-8 col-sm-4">
    		<h3>SEGUIMIENTO PRESUPUESTO DE EGRESOS DE LA FEDERACION 2016</h3>	
    	</div>
    	<div class="col-md-2 col-sm-4">
    	
    	</div>
    </div>
	<!-- BEGIN LAYOUT RIGHT ALIGNED -->
	<div class="col-md-12">
		<div class="card card-underline">
			<div class="card-head">
				<ul class="nav nav-tabs pull-right" data-toggle="tabs">
					<li class="active"><a href="#first2">Construcción y Modernizacion...</a></li>
					<li><a href="#second2">Derecho de Vía...</a></li>
				</ul>
				<header>Seguimiento en <b>{{$estado}}</b> </header>
			</div>
		<div class="card-body tab-content">
			<div class="tab-pane active" id="first2">
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table id="table1" class="table table-striped table-hover order-column hover">
								<thead bgcolor="green">
									<tr style="color:white;">
			                            <th>PEF 2016 MDP</th>
			                            <th>Autorizado Modificado MDP</th>
			                            <th>Contratado a Mes MDP</th>
			                            <th>Contratado Total MDP</th>
			                            <th> Calendario Acumulado Mes MDP</th>
			                            <th>Calendario Tercer Trimestre MDP</th>
			                            <th bgcolor="#5D4037">En Tramite de Pago</th>
			                            <th bgcolor="#5D4037">Ejercido SIA</th>
			                            <th bgcolor="#5D4037">Ejercido SIAFF</th>
			                            <th bgcolor="#5D4037">Total</th>
									</tr>
								</thead>
								<tbody>
		                            <tr class="gradeX">
		                              @if($dato->pef_2016_mdp != 0)
						                <td class="text-primary-dark">{{$dato->pef_2016_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato->pef_2016_mdp}}</td>
						              @endif

						              @if($dato->pef_2016_mdp > $dato->autorizado_modificado_mdp)
						              	<td style="color:red;"><i class="md md-trending-down"></i>{{$dato->autorizado_modificado_mdp}}</td>
						                @elseif($dato->pef_2016_mdp < $dato->autorizado_modificado_mdp)
						                <td style="color:green;"><i class="md md-trending-up"></i>{{$dato->autorizado_modificado_mdp}}</td>
						                @elseif($dato->pef_2016_mdp == $dato->autorizado_modificado_mdp)
						                <td style="color:blue;"><i class="md md-swap-vert"></i>{{$dato->autorizado_modificado_mdp}}</td>
						              @endif

						              @if($dato->contratado_a_mes_mdp > 0)
						                <td >{{$dato->contratado_a_mes_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato->contratado_a_mes_mdp}}</td>
						              @endif
						              @if($dato->contratado_total_mdp > 0)
						                <td >{{$dato->contratado_total_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato->contratado_total_mdp}}</td>
						              @endif
		                              @if($dato->calendario_acumulado_mes_mdp > 0)
						                <td >{{$dato->calendario_acumulado_mes_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato->calendario_acumulado_mes_mdp}}</td>
						              @endif
		                              @if($dato->calendario_al_tercer_trimestre_mdp > 0)
						                <td >{{$dato->calendario_al_tercer_trimestre_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato->calendario_al_tercer_trimestre_mdp}}</td>
						              @endif
		                              @if($dato->en_tramite_de_pago > 0)
						                <td >{{$dato->en_tramite_de_pago}}</td>
						                @else
						                <td style="color:red;">{{$dato->en_tramite_de_pago}}</td>
						              @endif
		                              @if($dato->ejercido_sia > 0)
						                <td >{{$dato->ejercido_sia}}</td>
						                @else
						                <td style="color:red;">{{$dato->ejercido_sia}}</td>
						              @endif
		                              @if($dato->ejercido_siaff > 0)
						                <td >{{$dato->ejercido_siaff}}</td>
						                @else
						                <td style="color:red;">{{$dato->ejercido_siaff}}</td>
						              @endif
		                              @if($dato->total > 0)
						                <td >{{$dato->total}}</td>
						                @else
						                <td style="color:red;">{{$dato->total}}</td>
						              @endif
		                            </tr>			
								</tbody>
							</table>
						</div><!--end .table-responsive -->
					</div><!--end .col -->
				</div><!--end .row -->


				<div class=row>
				 <div class="col-md-12">
				 	<div class="col-md-3">
				 	@include('graph.graphState', array('asignaciones'))
				 	</div>
				 	<div class="col-md-3">
				 	 @include('graph.graphState2', array('contratado'))
				 	</div>
				 	<div class="col-md-3">
				 	@include('graph.graphState3', array('analisis'))
				 	</div>
				 	<div class="col-md-3">
				 	@include('graph.graphState4', array('saldo'))
				 	</div>
				 </div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card-body">
							<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
								{!!link_to_route('admin.estadoasignaciones', $title = 'Reporte Obras Asignacion',$estado, $attributes = ['class'=>'informe btn btn-default-bright','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Ver Reporte'])!!}
								{!!link_to_route('admin.estadocontratado', $title = 'Reporte Obras Contratado',$estado, $attributes = ['class'=>'informe btn btn-default-bright','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Ver Reporte'])!!}
								{!!link_to_route('admin.estadocortemes', $title = 'Reporte Obras Corte Mes',$estado, $attributes = ['class'=>'informe btn btn-default-bright','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Ver Reporte'])!!}
								{!!link_to_route('admin.estadosaldo', $title = 'Reporte Obras Saldo',$estado, $attributes = ['class'=>'informe btn btn-default-bright','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Ver Reporte'])!!}
							</div><!--end .btn-group -->
						</div><!--end .card-body -->
					</div><!--end .col -->
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table id="table1" class="table table-striped table-hover order-column hover">
								<thead  bgcolor="green">
									<tr style="color:white;">
										<th>Acción</th>
			                            <th>Registro SHCP</th>
			                            <th>Carretera</th>
			                            <th>PEF 2016 MDP</th>
			                            <th>Autorizado Modificado MDP</th>
			                            <th>Contratado a Mes MDP</th>
			                            <th>Contratado Total MDP</th>
			                            <th>Acumulado Mes MDP</th>
			                            <th>Tercer Trimestre MDP</th>
			                            <th bgcolor="#5D4037">En Tramite de Pago</th>
			                            <th bgcolor="#5D4037">Ejercido SIA</th>
			                            <th bgcolor="#5D4037">Ejercido SIAFF</th>
			                            <th bgcolor="#5D4037">Total</th>
									</tr>
								</thead>
								<tbody>
								@foreach($contruccion as $dato)
		                            <tr class="gradeX">
		                            <td>
		                                {!!link_to_route('admin.Obra', $title = '', $parameters = $dato->registro_shcp, $attributes = ['class'=>'donut2 btn btn-icon-toggle md-assessment','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Ver Graficas'])!!}
		                              </td>
		                              <td >{{$dato->registro_shcp}}</td>
		                              <td >{{substr($dato->carretera, 0,20)."..."}}</td>
		                              @if($dato->pef_2016_mdp != 0)
						                <td >
						                	{!!link_to_route('admin.item',$dato->pef_2016_mdp, $parameters = $dato, $attributes = ['class'=>'donut btn no-margin text-primary-dark','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'PEF vs Autorizado Modificado'])!!}
						                </td>
						                @else
						                <td style="color:red;">{{$dato->pef_2016_mdp}}</td>
						              @endif

						              @if($dato->pef_2016_mdp > $dato->autorizado_modificado_mdp)
						                <td style="color:red;">
						                	{!!link_to_route('admin.item',$dato->autorizado_modificado_mdp, $parameters = $dato, $attributes = ['class'=>'donut btn md md-trending-down','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'PEF vs Autorizado Modificado'])!!}
						                </td>
						                @elseif($dato->pef_2016_mdp < $dato->autorizado_modificado_mdp)
						                <td style="color:green;">
						                	{!!link_to_route('admin.item',$dato->autorizado_modificado_mdp, $parameters = $dato, $attributes = ['class'=>'donut btn md md-trending-up','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Ver Grafica'])!!}
						                </td>
						                @elseif($dato->pef_2016_mdp == $dato->autorizado_modificado_mdp)
						                <td style="color:blue;">
						                	{!!link_to_route('admin.item',$dato->autorizado_modificado_mdp, $parameters = $dato, $attributes = ['class'=>'donut btn  md md-swap-vert','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Ver Grafica'])!!}
						                </td>
						              @endif

						              @if($dato->contratado_a_mes_mdp > 0)
						                <td >{{$dato->contratado_a_mes_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato->contratado_a_mes_mdp}}</td>
						              @endif
						              @if($dato->contratado_total_mdp > 0)
						                <td >{{$dato->contratado_total_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato->contratado_total_mdp}}</td>
						              @endif
		                              @if($dato->calendario_acumulado_mes_mdp > 0)
						                <td >{{$dato->calendario_acumulado_mes_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato->calendario_acumulado_mes_mdp}}</td>
						              @endif
		                              @if($dato->calendario_al_tercer_trimestre_mdp > 0)
						                <td >{{$dato->calendario_al_tercer_trimestre_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato->calendario_al_tercer_trimestre_mdp}}</td>
						              @endif
		                              @if($dato->en_tramite_de_pago > 0)
						                <td >{{$dato->en_tramite_de_pago}}</td>
						                @else
						                <td style="color:red;">{{$dato->en_tramite_de_pago}}</td>
						              @endif
		                              @if($dato->ejercido_sia > 0)
						                <td >{{$dato->ejercido_sia}}</td>
						                @else
						                <td style="color:red;">{{$dato->ejercido_sia}}</td>
						              @endif
		                              @if($dato->ejercido_siaff > 0)
						                <td >{{$dato->ejercido_siaff}}</td>
						                @else
						                <td style="color:red;">{{$dato->ejercido_siaff}}</td>
						              @endif
		                              @if($dato->total > 0)
						                <td >{{$dato->total}}</td>
						                @else
						                <td style="color:red;">{{$dato->total}}</td>
						              @endif
		                            </tr>
		                            @endforeach
													
								</tbody>
							</table>
						</div><!--end .table-responsive -->
					</div><!--end .col -->
				</div><!--end .row -->
				<!-- END DATATABLE 1 -->

			</div>
			<div class="tab-pane" id="second2">
			<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table id="table1" class="table table-striped table-hover order-column hover">
								<thead bgcolor="green">
									<tr style="color:white;">
			                            <th>PEF 2016 MDP</th>
			                            <th>Autorizado Modificado MDP</th>
			                            <th>Contratado a Mes MDP</th>
			                            <th>Contratado Total MDP</th>
			                            <th> Calendario Acumulado Mes MDP</th>
			                            <th>Calendario Tercer Trimestre MDP</th>
			                            <th bgcolor="#5D4037">En Tramite de Pago</th>
			                            <th bgcolor="#5D4037">Ejercido SIA</th>
			                            <th bgcolor="#5D4037">Ejercido SIAFF</th>
			                            <th bgcolor="#5D4037">Total</th>
									</tr>
								</thead>
								<tbody>
		                            <tr class="gradeX">
		                              @if($dato2->pef_2016_mdp != 0)
						                <td class="text-primary-dark">{{$dato2->pef_2016_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato2->pef_2016_mdp}}</td>
						              @endif

						              @if($dato2->pef_2016_mdp > $dato2->autorizado_modificado_mdp)
						              	<td style="color:red;"><i class="md md-trending-down"></i>{{$dato2->autorizado_modificado_mdp}}</td>
						                @elseif($dato2->pef_2016_mdp < $dato2->autorizado_modificado_mdp)
						                <td style="color:green;"><i class="md md-trending-up"></i>{{$dato2->autorizado_modificado_mdp}}</td>
						                @elseif($dato2->pef_2016_mdp == $dato2->autorizado_modificado_mdp)
						                <td style="color:blue;"><i class="md md-swap-vert"></i>{{$dato2->autorizado_modificado_mdp}}</td>
						              @endif

						              @if($dato2->contratado_a_mes_mdp > 0)
						                <td >{{$dato2->contratado_a_mes_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato2->contratado_a_mes_mdp}}</td>
						              @endif
						              @if($dato2->contratado_total_mdp > 0)
						                <td >{{$dato2->contratado_total_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato2->contratado_total_mdp}}</td>
						              @endif
		                              @if($dato2->calendario_acumulado_mes_mdp > 0)
						                <td >{{$dato2->calendario_acumulado_mes_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato2->calendario_acumulado_mes_mdp}}</td>
						              @endif
		                              @if($dato2->calendario_al_tercer_trimestre_mdp > 0)
						                <td >{{$dato2->calendario_al_tercer_trimestre_mdp}}</td>
						                @else
						                <td style="color:red;">{{$dato2->calendario_al_tercer_trimestre_mdp}}</td>
						              @endif
		                              @if($dato2->en_tramite_de_pago > 0)
						                <td >{{$dato2->en_tramite_de_pago}}</td>
						                @else
						                <td style="color:red;">{{$dato2->en_tramite_de_pago}}</td>
						              @endif
		                              @if($dato2->ejercido_sia > 0)
						                <td >{{$dato2->ejercido_sia}}</td>
						                @else
						                <td style="color:red;">{{$dato2->ejercido_sia}}</td>
						              @endif
		                              @if($dato2->ejercido_siaff > 0)
						                <td >{{$dato2->ejercido_siaff}}</td>
						                @else
						                <td style="color:red;">{{$dato2->ejercido_siaff}}</td>
						              @endif
		                              @if($dato2->total > 0)
						                <td >{{$dato2->total}}</td>
						                @else
						                <td style="color:red;">{{$dato2->total}}</td>
						              @endif
		                            </tr>			
								</tbody>
							</table>
						</div><!--end .table-responsive -->
					</div><!--end .col -->
				</div><!--end .row -->
				<div class=row>
				 <div class="col-md-12">
				 	@include('graph.graphVia', array('asignaciones1','contratado1','analisis1','saldo1'))
				 </div>
				
				
				<!-- END DATATABLE 2 -->


			</div>
			
		</div>
	</div><!--end .card -->
		<em class="text-caption">Dirección General de Carretera</em>
	</div><!--end .col -->
	<!-- END LAYOUT RIGHT ALIGNED -->
	
	<script>
    $(function(){

      $('.informe').popup({
      types : {
        youtube : function(content, callback){
          content = '<iframe width="420" height="315" src="'+content+'" frameborder="0" allowfullscreen></iframe>';
      // Don't forget to call the callback!
        callback.call(this, content);
        }
    },
      width :1070,
    height : 480
    });

    });
  </script>
  <script>
    $(function(){

      $('.donut').popup({
      types : {
        youtube : function(content, callback){
          content = '<iframe width="420" height="315" src="'+content+'" frameborder="0" allowfullscreen></iframe>';
      // Don't forget to call the callback!
        callback.call(this, content);
        }
    },
      width :950,
    height : 480
    });

    });
  </script>
  <script>
    $(function(){

      $('.donut2').popup({
      types : {
        youtube : function(content, callback){
          content = '<iframe width="420" height="315" src="'+content+'" frameborder="0" allowfullscreen></iframe>';
      // Don't forget to call the callback!
        callback.call(this, content);
        }
    },
      width :1000,
    height : 340
    });

    });
  </script>

  </section>

	@endsection
