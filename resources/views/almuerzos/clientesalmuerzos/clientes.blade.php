@extends('layouts.almuerzos')

@section('title', 'El Sabor De Casa')

@section('content')
    
    <h2>Clientes de Almuerzos</h2>

    @if(session('success'))
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