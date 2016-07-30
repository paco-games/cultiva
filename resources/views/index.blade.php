@extends('layouts.principal')
	@section('content')
	@include('alerts.errors')
	@include('alerts.request')
			<!-- main content start-->

						{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
							<div class="vali-form form-group1">
								{!!Form::label('correo','Correo:')!!}	
								{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}

								{!!Form::label('contrasena','Contraseña:')!!}	
								{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
							</div>
						{!!Form::submit('Iniciar',['class'=>'btn blue one'])!!}
						{!!Form::close()!!}
	@endsection	