@extends('layouts.admin')
{!!Html::script('js/jquery-1.11.1.min.js')!!}
<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/font-awesome.min.css?1422529194" />
  @section('content')
	<!-- BEGIN 404 MESSAGE -->
				<section>
					<div class="section-header">
						<ol class="breadcrumb">
							<li><a href="{!!URL::to('admin')!!}">home</a></li>
							<li class="active">404</li>
						</ol>
					</div>
					<div class="section-body contain-lg">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h1><span class="text-xxxl text-light">404 <i class="fa fa-search-minus text-primary"></i></span></h1>
								<h2 class="text-light">Esta pagina no existe</h2>
								
							</div><!--end .col -->
						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
				<!-- END 404 MESSAGE -->  
  @endsection