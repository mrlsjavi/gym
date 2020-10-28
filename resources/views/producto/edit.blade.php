@extends('layout')

@section('contenido')
	<h3>Editar Producto</h3>
	

	<form method="post" action="{{action('productoController@update', $id)}}">
	{!! csrf_field() !!}
	<input type="hidden" name="_method" value="PATCH">
	<p>
	<label for="nombre">Producto

	<input class="form-control" type="text" name="nombre" value="{{ $producto->nombre}}">
	</label>
	</p>

    <p>
	<label for="precio">Precio

	<input class="form-control" type="text" name="precio" value="{{ $producto->precio}}">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Actualizar">

</form>

@stop