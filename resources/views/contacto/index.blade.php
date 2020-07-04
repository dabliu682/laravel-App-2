@extends('layout')
@section('title', 'Dabliu.inc | Contacto.Inicio')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('contacto.store') }}">
					@csrf
					<h2 class="display-4">CONTACTO</h2>
					<hr>
					<div class="form-group">
						<label for="name"></label>
						<input class="form-control bg-light shadow-sm  @error('name') is-invalid @else border-0 @enderror " type="text" name="name" id="name" placeholder="Nombre.." value="{{ old('name') }}">
						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="email"></label>
						<input class="form-control bg-light shadow-sm  @error('email') is-invalid @else border-0 @enderror" type="email" name="email" id="email" placeholder="Email.." value="{{ old('email') }}">
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="subject"></label>
						<input class="form-control bg-light shadow-sm  @error('subject') is-invalid @else border-0 @enderror" type="text" name="subject" id="subject" placeholder="Asunto.." value="{{ old('subject') }}">
						@error('subject')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="content"></label>
						<textarea class="form-control bg-light shadow-sm  @error('content') is-invalid @else border-0 @enderror" name="content" id="content" placeholder="Mensaje.."  value="{{ old('content') }}"></textarea>
						@error('content')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<button class="btn btn-primary btn-lg btn-block">Enviar</button>
				</form>
			</div>
		</div>

	@endsection