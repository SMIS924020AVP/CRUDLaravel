@extends('layouts.plantillabase');

@section('contenido')
<a href="clientes/create" class="btn btn-primary">Crear</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Fecha</th>
        <th scope="col">Sucursal</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->Nombre}}</td>
            <td>{{$cliente->Apellido}}</td>
            <td>{{$cliente->Fecha}}</td>
            <td>{{$cliente->Sucursal}}</td>
            <td>{{$cliente->Ciudad}}</td>

            <a class="btn btn-info">Editar</a> 
            <button class="btn btn danger">Borrar</button>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection