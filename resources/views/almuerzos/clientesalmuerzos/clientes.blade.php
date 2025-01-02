@extends('layouts.almuerzos')

@section('title', 'El Sabor De Casa')

@section('content')

    
    <div class="agregar-container">
        <h2>Clientes de Almuerzos</h2>
        <a class="agregar" href="{{ route('clientesalmuerzos.create') }}">Agregar Orden</a>
    </div>
    @if (session('success'))
        <div class="mensaje-exito">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientesAlmuerzos as $clienteAlmuerzo)
                <tr>
                    <td>{{ $clienteAlmuerzo->nombre }}</td>
                    <td>{{ $clienteAlmuerzo->telefono }}</td>
                    <td>
                        <form method="POST" action="{{ route('clientesalmuerzos.destroy', $clienteAlmuerzo->id_cliente) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
