@extends('layouts.dashboard')

@section('content')
<h2>Órdenes</h2>
<table>
    <tr>
        <th>Cliente</th>
        <th>Detalle</th>
        <th>Ubicación</th>
        <th>Total</th>
        <th>Fecha</th>
        <th>Estado</th>
    </tr>
    @foreach($ordenes as $orden)
    <tr>
        <td>{{ $orden->cliente->nombre }}</td>
        <td>{{ $orden->detalle }}</td>
        <td>{{ $orden->ubicacion }}</td>
        <td>${{ number_format($orden->total, 2) }}</td>
        <td>{{ $orden->fecha_orden }}</td>
        <td>{{ $orden->situacion_pago }}</td>
    </tr>
    @endforeach
</table>
@endsection

