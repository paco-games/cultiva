@extends('layouts.admin')

  @section('content')
  <section>
    <div class="row">
    @include('alerts.success')
    @include('alerts.request')
    <!--custom-ruta-->
    <div class="col-md-12">
      <div class="panel-group" id="accordion2">
        <div class="card panel">
          <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
            <header>  
              <div class="sub-heard-part">
                <ol class="breadcrumb m-b-0">
                  <li><a href="{!!URL::to('admin')!!}">Home</a></li>
                
                  <li class="active">Catalogo de Semillas</li>
                </ol>
              </div><!--/sub-heard-part-->  
            </header>
          </div>
        </div><!--end .panel -->
      </div><!--end .panel-group -->
    </div><!--end .col -->
  
    <div class="col-md-12">
      <div class="row">
          <div class="panel-group" id="accordion1">
            <div class="card panel ">
              <div class="card-head  style-success">
                <header>Agregar Documento</header>
              </div>
                   
              <div class="card-body">
                <div class="validation-form col-md-12 form-group">
                  <div class="col-md-11 form-group"></div>
                      <div class="col-md-1 form-group">
                         {!!Form::submit('Guardar',['class'=>'btn green'])!!}
                      </div>
                  </div>
              </div>
            </div><!--end .panel -->
          </div><!--end .panel-group -->
        </div><!--end .col -->
      </div><!--end .row -->
    </div>
  </section>
  @endsection