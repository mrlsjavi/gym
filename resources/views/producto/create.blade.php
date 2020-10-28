    
@extends('layout')

@section('contenido')
	<h3>Nuevo Producto</h3>


<form method="POST" action="{{ route('producto.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Nombre

	<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<p>
	<label for="precio">Precio

		<input class="form-control" type="number" name="precio">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Guardar">

</form>


	
	
@stop