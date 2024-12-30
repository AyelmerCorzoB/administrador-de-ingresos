@extends('layouts.almuerzos')

@section('title', 'Agregar Orden de Almuerzo')

@section('content')
    <h2>Agregar Orden de Almuerzo</h2>
    <form method="POST" action="{{ route('ordenesalmuerzos.store') }}">
        @csrf
        <label for="id_cliente">Cliente</label>
        <select id="id_cliente" name="id_cliente" required>
            @foreach ($clientesAlmuerzos as $clienteAlmuerzo)
                <option value="{{ $clienteAlmuerzo->id_cliente }}">{{ $clienteAlmuerzo->nombre }}</option>
            @endforeach
        </select>

        <label for="detalle">Detalle</label>
        <input type="text" id="detalle" name="detalle" placeholder="Detalle" required>

        <label for="total">Total</label>
        <input type="text" id="total" name="total" placeholder="Total" required>

        <label for="ubicacion">Ubicación</label>
        <input type="text" id="ubicacion" name="ubicacion" placeholder="Ubicación" required>

        <label for="situacion_pago">¿Pagó hoy?</label>
        <input type="checkbox" id="situacion_pago" name="situacion_pago" value="1">

        <button type="submit">Guardar</button>
    </form>
@endsection