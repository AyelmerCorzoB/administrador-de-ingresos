@extends('layouts.almuerzos')

@section('title', 'Órdenes de Almuerzos')

@section('content')
    <h2>Órdenes de Almuerzos</h2>
    <a href="{{ route('ordenesalmuerzos.create') }}">Agregar Orden</a>

    @if(session('success'))
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
            @foreach ($ordenesAlmuerzos as $ordenAlmuerzo)
                <tr>
                    <td>{{ $ordenAlmuerzo->clienteAlmuerzo->nombre }}</td>
                    <td>{{ $ordenAlmuerzo->detalle }}</td>
                    <td>{{ $ordenAlmuerzo->total }}</td>
                    <td>{{ $ordenAlmuerzo->ubicacion }}</td>
                    <td>
                        <form method="POST" action="{{ route('ordenesalmuerzos.destroy', $ordenAlmuerzo->id_orden) }}">
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