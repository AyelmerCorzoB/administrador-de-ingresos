@extends('layouts.almuerzos')

@section('title', 'Agregar Cliente de Almuerzos')

@section('content')
    <h2>Agregar Cliente de Almuerzos</h2>
    <form method="POST" action="{{ route('clientesalmuerzos.store') }}">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>

        <label for="telefono">Teléfono</label>
        <input type="text" id="telefono" name="telefono" placeholder="Teléfono" required>

        <button type="submit">Guardar</button>
    </form>
@endsection