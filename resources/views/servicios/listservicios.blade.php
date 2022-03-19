@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1> 
@stop
@section('content')
<h1>Lista de clientes</h1>
<table class="table table-light">
	<thead class="thead-ligth">
		<tr>
			<th>#</th>
			<th>Servicio</th>
			<th>Costo</th>
			<th>Estatus</th>
            <th>Eliminar | Editar</th>
		</tr>
	</thead>
	<tbody>
        @foreach($servicios as $servicio)
		<tr>
            <td>{{$servicio->idservicio}}</td>
            <td>{{$servicio->descripcion}}</td>
            <td>{{$servicio->costo}}</td>
            <td>{{$servicio->estatus}}</td>
            <td>
                <form action="" methosd="post">
                    <input type="submit" onclick="return confirm('¿Quieres borrar')" value="Borrar"/>
                </form>
                <form action="" methosd="post">
                    <input type="submit" onclick="return confirm('Editar Registro!')" value="Editar"/>
                </form>
            </td>
        </tr>
        @endforeach
	</tbody>
</table>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop
