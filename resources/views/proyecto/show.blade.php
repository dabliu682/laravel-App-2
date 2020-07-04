@extends('layout')

@section('title', $proyecto->title)
@section('content')
	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<h1 class="display-4">{{ $proyecto->title }}</h1>
			<h2>Descripción</h2>
			<p>{{ $proyecto->content }}</p>
			<p class="text-black-50">{{ $proyecto->created_at->diffForHumans() }}</p>
			<div class="d-flex justify-content-between align-items-center">
				<a href="{{ route('proyecto.index') }}">Regresar</a>
				@auth
					<div class="form-group btn-group-sm">
						<a class="btn btn-primary" href="{{ route('proyecto.edit', $proyecto) }}">Editar</a>
						<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-proyecto').submit()" >Eliminar</a>
					</div>
					<form class="d-none" id="delete-proyecto" method="POST" action="{{ route('proyecto.destroy', $proyecto) }}">
						@csrf @method('DELETE')
					</form>
					</div>
				@endauth
			</div>
	</div>
@endsection