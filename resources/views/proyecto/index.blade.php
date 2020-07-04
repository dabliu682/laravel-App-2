@extends('layout')
@section('title', 'Dabliu.inc | Proyecto.Inicio')
@section('content')
<div class="container">
	<h1 class="display-4 mb-0">Proyectos</h1>
	<p class="lead text-secondary text-align-center">
		Proyectos realizados Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
	</p>
	<ul class="list-group">
		@forelse( $proyectos as $proyecto )
		<li class="list-group-item border-0 mb-3 shadow-sm">
			<a class=" text-secondary d-flex justify-content-between align-items-center" href="{{ route('proyecto.show', $proyecto) }}">
				<span class=" font-weight-bold">
					{{ $proyecto->title }}
				</span>
				<span class="text-black-50">
					{{ $proyecto->created_at->format('d/m/Y') }}
				</span>
			</a>
		{{-- <small>{{ $proyectoItem->content }}</small><br>
		<small>{{ $proyectoItem->created_at->diffForHumans() }}</small> --}}</li>
		@empty
		<li class="list-group-item border-0 mb-3 shadow-sm">
			No hay Proyectos que mostrar
		</li>
		@endforelse
		<div class="d-flex justify-content-between align-items-center mb-3">
			{{ $proyectos->links() }}
			@auth
			<a class="btn btn-primary" href="{{ route('proyecto.create') }}">Crear Proyecto</a>
		@endauth
		</div>

	</ul>
</div>

@endsection