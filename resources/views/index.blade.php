@extends('layout')
@section('title', 'Dabliu.inc | Inicio')
@section('content')
<div class="container py-3 px-10">
	<div class="row">
		<div class="col-12 col-lg-6">
			<h1 class="display-5 text-primary">DESARROLLO DE SOFTWARE</h1>
			<p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-7" src="/img/designer.svg" alt="home.svg">
			<a class="btn btn-lg btn-block btn-primary" href="{{ route('contacto.index') }}">Contactame</a>
		</div>
		<hr>

		<div class="col-12 col-lg-6 px-100">
			<img class="img-fluid mb-7" src="/img/inicio.svg" alt="home.svg">
			<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('proyecto.index') }}">Mis Proyectos</a>
		</div>
		<div class="col-12 col-lg-6">
			<h1 class="display-4 text-primary align-center">Oscar Gallardo <small>(Dabliu)</small></h1>
			<p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>



		</div>
	</div>
</div>



@endsection

