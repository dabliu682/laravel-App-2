@extends('layout')
@section('title', 'Dabliu.inc | Clientes')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-12 mx-auto">
			<div class="container bg-white py-3 px-4 shadow rounded">
	<table class="table col-12 col-sm-10 col-lg-12 ">
		<h1 class="display-5" > Clientes registrados</h1>
		<thead>
			<tr>
				<td>id</td>
				<td>Nombre</td>
				<td>Telefono</td>
				<td>Correo Eletronico</td>
				<td>Ubicacion</td>
				<td>Accion</td>
			</tr>
		</thead>
		<tbody>
			@foreach($clientes as $cliente )
				<tr>
					<td>{{ $cliente->id }}</td>
					<td>{{ $cliente->name }}</td>
					<td>{{ $cliente->phone }}</td>
					<td>{{ $cliente->email }}</td>
					<td>{{ $cliente->direccion }}</td>
					<td><button class="btn btn-round"><i class="fa fa-trash" ></i>d</button></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="d-flex justify-content-between align-items-center mb-3">
		{{ $clientes->links() }}
	</div>
</div>
		</div>
	</div>
</div>




@endsection