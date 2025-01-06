@extends('layouts.almuerzos')

@section('title', 'Órdenes de Almuerzos')

@section('content')
    
    <div class="agregar-container">
        <h2>Órdenes</h2>
        <a class="agregar" href="{{ route('ordenesalmuerzos.orden_create') }}">Agregar Orden</a>
    </div>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Detalle</th>
                <th>Total</th>
                <th>Ubicación</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ordenesAlmuerzos as $orden)
                <tr>
                    <td>{{ $orden->clienteAlmuerzo->nombre ?? 'Cliente no encontrado' }}</td>
                    <td>{{ $orden->detalle }}</td>
                    <td>{{ $orden->total }}</td>
                    <td>{{ $orden->ubicacion }}</td>
                    <td class="acciones">
                        <form method="GET" action="{{ route('ordenesalmuerzos.orden_edit', $orden->id_orden) }}">
                            <button type="submit">Editar</button>
                        </form>
                        
                        <form method="POST" action="{{ route('ordenesalmuerzos.destroy', $orden->id_orden) }}">
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
