@extends('layout')
@section('title', 'Dabliu.inc | Proyecto.Crear')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			@include('partials.validacionForm')
			<form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('proyecto.store') }}">
				<h1 class="display-4">Nuevo proyecto</h1>
				<hr>
				@include('proyecto._form', [ 'btnText' => 'Crear' ])
			</form>
		</div>
	</div>
</div>
@endsection