@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<input type="submit" value="Agregar"/> 
@stop
@section('content')
<h1>Listar Trabajador</h1>
<table class="table table-light">
	<thead class="thead-ligth">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Primer Apellido</th>
			<th>Segundo Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Estatus</th>
            <th>Eliminar | Editar</th>
            
		</tr>
	</thead>
	<tbody>
        @foreach($trabajadores as $trabajador)
		<tr>
            <td>{{$trabajador->idtrabajador}}</td>
            <td>{{$trabajador->nombre}}</td>
            <td>{{$trabajador->apaterno}}</td>
            <td>{{$trabajador->amaterno}}</td>
            <td>{{$trabajador->direccion}}</td>
            <td>{{$trabajador->telefono}}</td>
            <td>{{$trabajador->correo}}</td>
            <td>{{$trabajador->tipo}}</td>
            <td>{{$trabajador->estatus}}</td>
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
