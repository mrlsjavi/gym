@extends('layout')

@section('contenido')

<h1>Productos</h1>

<br/>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>nombre</th>
            <th>Precio</th>
			<th>Accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($productos as $producto)
		<tr>
			<td>{{ $producto->id}}</td>
			<td>{{ $producto->nombre}}</td>
            <td>{{ $producto->precio}}</td>
			<td><a href="{{ action('productoController@edit', $producto['id']) }}" class="btn btn-info btn-xs">Edit</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $productos->links() }}

</table>



@stop