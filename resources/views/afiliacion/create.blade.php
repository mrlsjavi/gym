    
@extends('layout')

@section('contenido')
	<h3>Nueva Afiliacion</h3>


<form method="POST" action="{{ route('membresia.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="usuario">Usuario

	<input class="form-control" type="text" name="usuario">
	</label>
	</p>

	<p>
	<label for="membresia">Membresia

		<input class="form-control" type="text" name="membresia">
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
    <label for="estado">Estado

		<input class="form-control" type="text" name="estado">
	</label>
	</p>


	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop