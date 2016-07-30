
@extends('layouts.admin')
	@section('content')
	<div class="graph">
            <div class="sub-heard-part">
              <ol class="breadcrumb m-b-0">
                <li><a href="{!!URL::to('admin')!!}">Home</a></li>
                <li class="active">Datos</li>
              </ol>
            </div>
            <!--/sub-heard-part-->  
            @include('alerts.request')
            <!--/forms-->
            <div class="forms-main">
              <h2 class="inner-tittle">Crear Empresa</h2>
                <div class="validation-form">
                  <!---->
                {!!Form::open(['route'=>'seguimiento.store', 'method'=>'POST'],array('id' => 'formulario_busqueda'))!!}

                @include('datos.forms.dat')
                <div class="col-md-6 form-group"></div>
                <div class="col-md-6 form-group">
                  {!!Form::submit('Cargar Archivo',['class'=>'btn btn-primary'])!!}
                </div>
                {!!Form::close()!!}
                <!---->
                </div>
            </div> 
            <!--//forms-->  
          </div>

	@endsection