@extends('layouts.app')
@section('content')
<div id="content-wrapper">
	<div class="container">
		<div class="heading-title"><h4>Que Tipo de oferta desea Publicar</h4></div>
		<section class="container informacion">			
		    <div class="row mx-0">
		        <div class="col-md-4 col-xs-12 text-center">
		            <div class="icon">
		                <i class="fas fa-user" style="padding: 20px 23px;"></i>
		            </div>
		            <h2>
		                Profesional
		            </h2>
		        </div>
		        <div class="col-md-4 col-xs-12 text-center">
		            <div class="icon">
		                <i class="fas fa-university" style="padding: 20px 20px;"></i>
		            </div>
		            <h2>
		                Práctica
		            </h2>
		        </div>
		        <div class="col-md-4 col-xs-12 text-center">
		            <div class="icon">
		                <i class="fas fa-lock" style="padding: 20px 23px;"></i>
		            </div>
		            <h2>
		                Trabajo para estudiante
		            </h2>
		        </div>
		        <div class="col-12 text-center mt-5">
		            <div class="btn btn-primary">Ver Ofertas</div>
		        </div>
		    </div>
		</section>
	</div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/company.css">
@endpush