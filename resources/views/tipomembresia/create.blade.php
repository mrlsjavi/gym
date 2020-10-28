    
@extends('layout')

@section('contenido')
	<h3>Nuevo tipo de membresia</h3>


<form method="POST" action="{{ route('tipoMembresia.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Nombre

	<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop