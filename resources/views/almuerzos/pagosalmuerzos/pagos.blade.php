@extends('layouts.almuerzos')

@section('title', 'El Sabor De Casa')

@section('content')
    <h2>Pagos</h2>
    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Monto</th>
                <th>Fecha</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $pago)
                <tr>
                    <td>{{ $pago->cliente->nombre }}</td>
                    <td>${{ number_format($pago->monto, 2) }}</td>
                    <td>{{ $pago->fecha_pago }}</td>
                    <td>
                        <form method="POST" action="">
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
