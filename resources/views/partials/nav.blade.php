<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{ route('inicio') }}">
			{{ config('app.name') }}
		</a>

		<button class="navbar-toggler" type="button"
			data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="{{ __('Toggle navigation') }}">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills">
				<li class=" nav-item ">
					<a class="nav-link {{ active('inicio') }}" href="{{ route('inicio') }}">Inicio</a>
				</li>

				<li class=" nav-item ">
					<a class="nav-link {{ active('proyecto.*') }}" href="{{ route('proyecto.index') }}">Proyectos</a>
				</li>
				<li class=" nav-item ">
					<a class="nav-link {{ active('contacto.index') }}" href="{{ route('contacto.index') }}">Contactos</a>
				</li>
				@auth
					<li class=" nav-item ">
						<a class="nav-link {{ active('clientes.index') }}" href="{{ route('clientes.index') }}">Clientes</a>
					</li>
					<li class=" nav-item ">
						<a class="nav-link {{ active('usuario.index') }}" href="{{ route('usuario.index') }}">Usuarios</a>
					</li>
				@endauth

				@guest
					<li class=" nav-item ">
						<a class="nav-link {{ active('login') }}" href="{{ route('login') }}">Login</a>
					</li>
				@else
					<li class=" nav-item ">
						<a class="nav-link" href="#" onclick="event.preventDefault();
						 document.getElementById('logout-form').submit();">{{ auth()->user()->name}}</a>
					</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
 </form>