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
			<th>Fecha</th>
			<th>Vehiculo</th>
			<th>Cajero</th>
            <th>Servicio</th>
            <th>Trabajador</th>
            <th>Estatus</th>
            <th>Eliminar | Editar</th>
		</tr>
	</thead>
	<tbody>
        @foreach($ventas as $venta)
		<tr>
            <td>{{$venta->idventas}}</td>
            <td>{{$venta->fecha}}</td>
            <td>{{$venta->idvehiculo}}</td>
            <td>{{$venta->idcajero}}</td>
            <td>{{$venta->idtrabajador}}</td>
            <td>{{$venta->idservicio}}</td>
            <td>{{$venta->estatus}}</td>
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
