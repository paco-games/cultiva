@extends('layouts.admin')
	{!!Html::script('js/jquery-1.11.1.min.js')!!}
	<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/font-awesome.min.css?1422529194" />
  @section('content')
  <!-- BEGIN 500 MESSAGE -->
				<section>
					<div class="section-header">
						<ol class="breadcrumb">
							<li><a href="../../html/.html">home</a></li>
							<li class="active">500</li>
						</ol>
					</div>
					<div class="section-body contain-lg">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h1><span class="text-xxxl text-light">500 <i class="fa fa-exclamation-circle text-danger"></i></span></h1>
								<h2 class="text-light">Oops! Something went wrong</h2>
							</div><!--end .col -->
						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
				<!-- END 500 MESSAGE -->
  @endsection