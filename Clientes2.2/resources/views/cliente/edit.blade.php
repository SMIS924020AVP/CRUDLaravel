@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registro</h2>

<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombres</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$cliente->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellidos</label>
    <input id="apellido" name="apellido" type="text" class="form-control" value="{{$cliente->apellido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de compra</label>
    <input id="fecha" name="fecha" type="text" class="form-control"  value="{{$cliente->fecha}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sucursal</label>
    <input id="sucursal" name="sucursal" type="number" step="any" value="0.00" class="form-control"  value="{{$cliente->sucursal}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ciudad</label>
    <input id="ciudad" name="ciudad" type="text" class="form-control"  value="{{$cliente->ciudad}}">
  </div>
  <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection