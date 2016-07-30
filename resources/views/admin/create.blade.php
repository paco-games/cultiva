
@extends('layouts.admin')
{!!Html::script('js/jquery-1.11.1.min.js')!!}
	@section('content')
	 <section>
      <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
          <li><a href="{!!URL::to('admin')!!}">Home</a></li>
          <li class="active">Datos</li>
        </ol>
      </div><!--/sub-heard-part-->  
      @include('alerts.request')
      <!--/forms-->
      <div class="card card-bordered style-success">
        <div class="card-head">
          <header><i class="md md-insert-drive-file"></i> Cargar Documento</header>
        </div>
          <div class="card-body style-default-bright">
            <div class="forms-main">
                <div class="validation-form">
                  {!!Form::open(['route'=>'admin.store', 'method'=>'POST',
                           'files'=>true],array('id' => 'formulario_busqueda'))!!}
                  @include('datos.forms.dat')
                  <div class="col-md-6 form-group"></div>
                  <div class="col-md-6 form-group">
                    {!!Form::submit('Cargar Archivo',['class'=>'btn btn-success'])!!}
                  </div>
                  {!!Form::close()!!}
                <!---->
                </div>
            </div>
        </div><!--//forms-->  
      </div>
    </section>

	@endsection