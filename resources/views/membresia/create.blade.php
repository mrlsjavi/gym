    
@extends('layout')

@section('contenido')
	<h3>Nueva Membresia</h3>


<form method="POST" action="{{ route('membresia.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Nombre

	<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<p>
	<label for="precio">Precio

		<input class="form-control" type="text" name="precio">
	</label>
	</p>

    <p>
	<label for="fecha_inicio">Fecha Inicio

		<input class="form-control" type="date" name="fecha_inicio">
	</label>
	</p>
    <p>
	<label for="fecha_final">Fecha Final

		<input class="form-control" type="date" name="fecha_final">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop