    
@extends('layout')

@section('contenido')
	<h3>Nuevo Cliente</h3>


<form method="POST" action="{{ route('cliente.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Nombre

	<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<p>
	<label for="email">Email

		<input class="form-control" type="email" name="email">
	</label>
	</p>

    <p>
	<label for="telefono">Telefono

		<input class="form-control" type="number" name="telefono">
	</label>
	</p>
    <p>
	<label for="dpi">DPI

		<input class="form-control" type="number" name="dpi">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop