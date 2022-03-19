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
			<th>Nombre</th>
			<th>Primer Apellido</th>
			<th>Segundo Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Fecha de Registro</th>
            <th>Estatus</th>
            <th>Eliminar | Editar</th>
            
		</tr>
	</thead>
	<tbody>
        @foreach($clientes as $cliente)
		<tr>
            <td>{{$cliente->idcliente}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apaterno}}</td>
            <td>{{$cliente->amaterno}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->correo}}</td>
            <td>{{$cliente->fechareg}}</td>
            <td>{{$cliente->estatus}}</td>
            <td>
                <form action="{{ url('/clientes/'.$cliente->idcliente)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar')"><i class="fas fa-fw fa-trash"></i></button>
                </form>
                <form action="" methosd="post">
                    <button type="submit" class="btn btn-warning" onclick="return confirm('Editar Registro!')"><i class="fas fa-fw fa-pen"></i></button>
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
