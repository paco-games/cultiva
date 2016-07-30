@extends('layouts.admin')
{!!Html::script('js/jquery-1.11.1.min.js')!!}
{!!Html::script('js/dropzone.js')!!}
{!!Html::style('css/dropzone.css')!!}
@section('content')
<section>
  <div class="row">
    <!--/sub-heard-part-->
    <div class="sub-heard-part">
      <ol class="breadcrumb m-b-0">
        <li><a href="{!!URL::to('admin')!!}">Home</a></li>
        <li class="active">Catalogo Semillas</li>
      </ol>
    </div> <!--/sub-heard-part-->  
    <div class="card">
      <div class="card-head">
        <header> Agregar Semillas al catalogo</header>
      </div>
      <div class="forms-main">
        <div class="card-body style-default-bright">
          <!--/forms-->
          <div class="forms-main">
            <div class="validation-form">       
              {!!Form::open(['route'=>'indexSeeds.store',
                           'method'=>'POST',
                           'class' => 'dropzone',
                           'id' => 'my-dropzone',
                           'files'=>true])!!}

              @include('seeds.forms.carga', array('some'=>'new'))
              {!!Form::submit('Guardar',['class'=>'btn btn-primary','id'=>'submit-all'])!!}
              {!!Form::close()!!}
            </div>
            <!---->
          </div>
          <div id="table" class="table" >
            <div class="forms">
            <div class="form-body">
              <!--aqui va la tabla-->
              <table id="table1" class="table table-striped table-bordered table-hover table-condensed" >
                <thead>
                  <th>Tipo de proceso</th>
                  <th>Formato</th>
                  <th>Fecha</th>
                  <th>Nombre</th>
                  <th>Operación</th>
                </thead>
                
              </table>
            </div>
            </div>
            <script>
              $(function(){
                $('.pdf_popup').popup({
                  types : {
                    youtube : function(content, callback){
                      content = '<iframe width="420" height="315" src="'+content+'" frameborder="0" allowfullscreen></iframe>';
                        // Don't forget to call the callback!
                        callback.call(this, content);
                      }
                  },
                  width :950,
                  height : 550
                });
              });
            </script> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  @endsection
  @section('scripts')
    {!! Html::script('js/jquery.popup.js')!!}
    {!! Html::style('css/popup.css')!!}
    <script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 1,
            acceptedFiles: '.pdf',
            
            init: function() {
                var submitBtn = document.querySelector("#submit-all");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("Se ha cargado un archivo");
                });
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>
@endsection