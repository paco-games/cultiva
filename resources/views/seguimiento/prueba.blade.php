@extends('layouts.admin')
@section('content')

 <div class="graph">
    <!--custom-ruta-->
     				<div class="sub-heard-part">
					              <ol class="breadcrumb m-b-0">
					                <li><a href="{!!URL::to('admin')!!}">Home</a></li>
					                <li class="active">Datos</li>
					              </ol>
		          </div> 
		          <h5>SEGUIMIENTO PRESUPUESTO DE EGRESOS DE LA FEDERACIÓN 2016</h5>
						 <h6>Dirección General de Carreteras</h6>
						 <h6>Programa de contrucción y Modernización de Carreteras</h6>
    <div class="card card-bordered" style="background: #d1cfa9;" >

   		 <div class="custom-widgets">  
    <!--//custom-ruta-->
    @include('alerts.success')
   <!--Agregar modelo-->
   
		        <div class="card-head">
		          <header><i class="md md-location-city"></i> Programa de Construcción y Modernizacion de Carreteras</header>
		           <div class="tools">
          {!!link_to_route('seguimiento.create', $title = 'Cargar Datos', $parameters = "", $attributes =   ['class'=>'btn btn-block ink-reaction btn-primary-dark'])!!}
        </div>
		        </div>
		    <div class="card-body style-default-bright">
		          <div clas="container" id="Layer1" overflow: scroll;>
		            <div class="accordion">
		              <div class="accordion-section">
		                 
		                <div id="accordion-1" class="accordion-section-content">
		                <div class="col-md-12">
						<h4>Datos obtenidos del excel Hoja 3 </h4>
					</div><!--end .col -->
		                <!--//boton flotante-->               
		                  <div id="table" class="table-editable">
		                    <div class="forms">
		                      <div class="form-body">
		                        <!--aqui va la tabla-->
		                        <table id="datatables2">
							            <thead bgcolor="#5f0404">
								            <tr style="color:white;">
											  <!--<th>No.</th>
											  <th>Registro de la SHCP</th>
											  <th>Carretera</th>-->
											  <th>Estado</th>
											  <th>PEF 2016 MDP</th>
											  <th>Autorizado Modificado MDP</th>
											  <th> Contratado junio MDP</th>
											  <th>Contratado total MDP</th>
											  <th>Calendario acumulado junio</th>
											  <th>Calendario segundo trimestre</th>
											  <th>En tramite de pago</th>
											  <th>Ejercido SIA</th>
											  <th>Ejercido SIAFF</th>
											  <th>Total</th>
											  <th>Saldo (Calendario vs ejercido)</th>
											  <th>Saldo (Calendario 2do trimestre vs ejercido)</th>
											</tr>
									    </thead>
									    @foreach($datos as $dato)
							           	<tbody>
							          <td >{{$dato->estado}}</td>
		                              <td>{{$dato->pef_2016_mdp}}</td>
		                              <td >{{$dato->autorizado_modificado_mdp}}</td>
		                              <td >{{$dato->contratado_a_mes_mdp}}</td>
		                              <td >{{$dato->contratado_tptal_mdp}}</td>
		                              <td >{{$dato->calendario_acumulado_mes_mdp}}</td>
		                              <td >{{$dato->calendario_al_tercer_trimestre_mdp}}</td>
		                              <td >{{$dato->en_tramite_de_pago}}</td>
		                              <td >{{$dato->ejercido_sia}}</td>
		                              <td >{{$dato->ejercido_siaff}}</td>
		                              <td >{{$dato->total}}</td>
		                              <td >{{$dato->saldo_calendario_vs_ejercido}}</td>
		                              <td >{{$dato->saldo_calendario_trimestre_vs_ejercido}}</td>
		                            </tr>
		                            @endforeach
							           	</tbody>
			          			</table>
		                      </div>
			                      {!!Html::script('js/jquery.dataTables.js')!!}
			                      
			                      <script type="text/javascript">
			                      $(document).ready(function(){
			                        $('#datatable2').DataTable();
			                      });
			                      </script>
		                    </div>
		                  </div>
		                  
		                </div>
		              </div>
		            </div><!--end .accordion-section-->
		    	</div>
		  	</div>
		  </div>
  </div>
  </div>
</div>
@endsection