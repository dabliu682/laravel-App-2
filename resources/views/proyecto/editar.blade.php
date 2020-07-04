@extends('layout')
@section('title', 'Dabliu.inc | Proyecto.Crear')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			@include('partials.validacionForm')
			<form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('proyecto.update', $proyecto) }}">
				@csrf @method('PATCH')
				<h2 class="display-4">Editar proyecto</h2>
				<hr>
				@include('proyecto._form', [ 'btnText' => 'Actualizar' ])
				<a class="btn btn-link btn-block" href="{{ route('proyecto.index') }}">Cancelar</a>
			</form>
		</div>
	</div>
</div>
@endsection