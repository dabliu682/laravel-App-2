@extends('layout')
@section('title', 'Dabliu.inc | Usuarios')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-12 mx-auto">
			<div class="container bg-white py-3 px-4 shadow rounded">
	<table class="table col-12 col-sm-10 col-lg-12 ">
		<h1 class="display-5" > Usuarios registrados</h1>
		<thead>
			<tr>
				<td>id</td>
				<td>name</td>
				<td>email</td>
				<td>fecha de creacion</td>
				<td>fecha de modificacion</td>
				<td>Accion</td>
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios as $usuario)
				<tr>
					<td>{{ $usuario->id }}</td>
					<td>{{ $usuario->name }}</td>
					<td>{{ $usuario->email }}</td>
					<td>{{ $usuario->created_at }}</td>
					<td>{{ $usuario->updated_at }}</td>
					<td><button class="btn btn-round"><i class="fa fa-trash" ></i>d</button></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="d-flex justify-content-between align-items-center mb-3">
		{{ $usuarios->links() }}
	</div>
</div>
		</div>
	</div>
</div>




@endsection