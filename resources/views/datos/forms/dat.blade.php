<!-- Script para validar rfc-->
		{!!Html::script('js/ValidaRfc.js')!!}


<div class="vali-form form-group1">
	
	 <div class="col-md-4 form-group">
          
        {!!Form::label('file','Documento:')!!}
        {!!Form::file('file',['onchange'=>'validapdf(this)'])!!}
    </div>
</div>
